const menuButton = document.querySelector("[data-menu-button]");
const primaryNav = document.querySelector("[data-nav]");

if (menuButton && primaryNav) {
  menuButton.addEventListener("click", () => {
    const nextOpen = menuButton.getAttribute("aria-expanded") !== "true";
    menuButton.setAttribute("aria-expanded", String(nextOpen));
    primaryNav.classList.toggle("is-open", nextOpen);
  });

  primaryNav.addEventListener("click", (event) => {
    if (event.target.closest("a")) {
      menuButton.setAttribute("aria-expanded", "false");
      primaryNav.classList.remove("is-open");
    }
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > 1230) {
      menuButton.setAttribute("aria-expanded", "false");
      primaryNav.classList.remove("is-open");
    }
  });
}

const createElement = (tag, className, text) => {
  const node = document.createElement(tag);
  if (className) node.className = className;
  if (text !== undefined) node.textContent = text;
  return node;
};

const append = (parent, ...children) => {
  children.filter(Boolean).forEach((child) => parent.append(child));
  return parent;
};

const externalMark = (label) => `${label} ↗`;
const internalMark = (label) => `${label} →`;

const dataRoot = (document.documentElement.dataset.dataRoot || "data").replace(/\/+$/, "");
const dataCache = new Map();

const loadData = (filename) => {
  if (!dataCache.has(filename)) {
    const url = `${dataRoot}/${filename}`;
    dataCache.set(
      filename,
      fetch(url, {
        headers: { Accept: "application/json" },
        cache: "no-cache",
      }).then((response) => {
        if (!response.ok) {
          throw new Error(`${response.status} ${response.statusText}`);
        }
        return response.json();
      }),
    );
  }
  return dataCache.get(filename);
};

const renderError = (mount, filename) => {
  const text =
    `Could not load ${filename}. Confirm that the file exists, contains valid JSON, ` +
    "and is served through Apache, Caddy, or another HTTP server.";

  if (mount.matches("p")) {
    mount.classList.add("data-error");
    mount.setAttribute("role", "status");
    mount.textContent = text;
    return;
  }

  const message = createElement(mount.matches("ol, ul") ? "li" : "p", "data-error");
  message.setAttribute("role", "status");
  message.textContent = text;
  mount.replaceChildren(message);
};

const renderHomeProjects = (mount, data) => {
  const items = data.active.slice(0, Number(mount.dataset.limit || 3));
  mount.replaceChildren(
    ...items.map((item) => {
      const li = createElement("li");
      append(
        li,
        createElement("strong", "", item.shortTitle),
        createElement("span", "", item.homeSummary),
      );
      return li;
    }),
  );
};

const renderHomePublications = (mount, data) => {
  const items = data.items
    .filter((item) => item.homepageOrder)
    .sort((a, b) => a.homepageOrder - b.homepageOrder)
    .slice(0, Number(mount.dataset.limit || 3));

  mount.replaceChildren(
    ...items.map((item) => {
      const li = createElement("li");
      const meta = createElement("span");
      append(meta, createElement("em", "", item.venue), document.createTextNode(` · ${item.year}`));
      append(li, createElement("strong", "", item.title), meta);
      return li;
    }),
  );
};

const publicationAssets = (item) => {
  if (!item.links?.length) return null;

  const nav = createElement("nav", "publication-assets");
  nav.setAttribute("aria-label", `Publication files for ${item.title}`);

  item.links.forEach((asset) => {
    const link = createElement("a", "", externalMark(asset.label));
    link.href = asset.url;
    link.target = "_blank";
    link.rel = "noopener noreferrer";
    nav.append(link);
  });

  return nav;
};

const publicationTagValues = (item) => {
  if (Array.isArray(item.tags) && item.tags.length) {
    return item.tags;
  }

  const themeLabels = {
    archive: "Web Archives",
    metadata: "Metadata",
    infrastructure: "Infrastructure",
  };

  return themeLabels[item.theme] ? [themeLabels[item.theme]] : [];
};

const publicationTags = (item) => {
  const tags = publicationTagValues(item);
  if (!tags.length) return null;

  const list = createElement("ul", "publication-tags");
  list.setAttribute("aria-label", "Research topics");
  tags.forEach((tag) => list.append(createElement("li", "", tag)));
  return list;
};

const renderPublicationTagFilters = (section, data) => {
  const mount = section?.querySelector("[data-tag-filter-options]");
  if (!mount) return;

  const tags = data.tagTaxonomy?.length
    ? data.tagTaxonomy
    : [...new Set(data.items.flatMap(publicationTagValues))].sort();
  const allTopics = mount.querySelector('[data-filter-value="all"]');
  const buttons = tags.map((tag) => {
    const button = createElement("button", "filter-button tag-filter-button", tag);
    button.type = "button";
    button.dataset.publicationFilter = "tag";
    button.dataset.filterValue = tag;
    button.setAttribute("aria-pressed", "false");
    return button;
  });

  mount.replaceChildren(allTopics, ...buttons);
};

const renderPublicationCounts = (data) => {
  document.querySelectorAll("[data-publication-count]").forEach((mount) => {
    const category = mount.dataset.publicationCount;
    const count =
      category === "all"
        ? data.items.length
        : data.items.filter((item) => item.category === category).length;
    mount.textContent = String(count);
  });
};

const publicationItem = (
  item,
  index,
  useTheme = false,
  showLinks = false,
  showTags = false,
) => {
  const li = createElement("li");
  li.dataset.category = useTheme ? item.theme : item.category;
  li.dataset.publicationType = item.category;
  li.dataset.publicationTags = publicationTagValues(item).join("|");
  const year = createElement("p", "publication-year", String(item.year));
  const copy = createElement("div");
  append(
    copy,
    createElement("p", "publication-venue", item.venue),
    createElement("h3", "", item.title),
    createElement("p", "publication-authors", item.authors.join(", ")),
    showTags ? publicationTags(item) : null,
    showLinks ? publicationAssets(item) : null,
  );
  const number = createElement("span", "", String(index + 1).padStart(2, "0"));
  number.setAttribute("aria-hidden", "true");
  append(li, year, copy, number);
  return li;
};

const renderPublications = (mount, data) => {
  const limit = Number(mount.dataset.limit || data.items.length);
  const items = data.items.slice(0, limit);
  const useTheme = mount.dataset.categoryMode === "theme";
  const showLinks = mount.dataset.showLinks === "true";
  const showTags = mount.dataset.showTags === "true";
  const emptyState = createElement(
    "li",
    "publication-empty-state",
    "No publications match this combination. Try another topic or reset the filters.",
  );
  emptyState.dataset.publicationEmptyState = "";
  emptyState.hidden = true;
  mount.replaceChildren(
    ...items.map((item, index) =>
      publicationItem(item, index, useTheme, showLinks, showTags),
    ),
    emptyState,
  );

  const section = mount.closest("section");
  renderPublicationTagFilters(section, data);
  renderPublicationCounts(data);
  applyPublicationFilters(section);
};

const projectMeta = (item) => {
  const meta = createElement("div", "project-meta");
  append(
    meta,
    createElement("span", "", item.index),
    createElement("p", "", item.status),
  );
  return meta;
};

const renderHomepageProjectLedger = (mount, data) => {
  mount.replaceChildren(
    ...data.active.map((item) => {
      const article = createElement("article");
      article.id = item.id;
      const copy = createElement("div");
      append(copy, createElement("h3", "", item.title), createElement("p", "", item.summary));
      const link = createElement("a", "", externalMark(item.urlLabel));
      link.href = item.url;
      link.setAttribute("aria-label", `${item.urlLabel}: ${item.title}`);
      append(article, projectMeta(item), copy, link);
      return article;
    }),
  );
};

const renderResearchProjects = (mount, data) => {
  mount.replaceChildren(
    ...data.active.map((item, index) => {
      const link = createElement("a");
      link.href = `projects.html#${item.id}`;
      append(
        link,
        createElement("span", "", `[${String.fromCharCode(65 + index)}]`),
        createElement("p", "note-label", item.status),
        createElement("h3", "", item.shortTitle),
        createElement("p", "", item.homeSummary),
        createElement("strong", "", internalMark("Project record")),
      );
      return link;
    }),
  );
};

const renderProjectCases = (mount, data) => {
  mount.replaceChildren(
    ...data.active.map((item) => {
      const article = createElement("article");
      article.id = item.id;
      const header = createElement("header");
      append(
        header,
        createElement("p", "entry-index", `[${item.index}]`),
        createElement("p", "project-status", item.status),
      );
      const title = createElement("div", "case-title");
      append(title, createElement("p", "note-label", item.label), createElement("h3", "", item.title));
      const body = createElement("div", "case-body");
      const details = createElement("dl");
      [
        ["Question", item.question],
        ["Contribution", item.contribution],
      ].forEach(([label, value]) => {
        const group = createElement("div");
        append(group, createElement("dt", "", label), createElement("dd", "", value));
        details.append(group);
      });
      append(body, createElement("p", "", item.summary), details);
      const link = createElement("a", "", externalMark(item.urlLabel));
      link.href = item.url;
      append(article, header, title, body, link);
      return article;
    }),
  );
};

const renderSystems = (mount, data) => {
  mount.replaceChildren(
    ...data.systems.map((item) => {
      const article = createElement("article");
      append(
        article,
        createElement("span", "", item.index),
        createElement("p", "note-label", item.label),
        createElement("h3", "", item.title),
        createElement("p", "", item.summary),
      );
      return article;
    }),
  );
};

const timelineItem = (item) => {
  const li = createElement("li");
  const copy = createElement("div");
  append(
    copy,
    createElement("p", "note-label", item.label || item.terms || item.institution),
    createElement("h3", "", item.title || item.codes),
    createElement("p", "", item.summary),
  );
  append(li, createElement("span", "", item.year || item.period), copy);
  return li;
};

const renderProjectTimeline = (mount, data) => {
  mount.replaceChildren(...data.timeline.map(timelineItem));
};

const renderAdvisees = (mount, data) => {
  mount.replaceChildren(
    ...data.advisees.map((item) => {
      const article = createElement("article", "person-record");
      const meta = createElement("div", "person-meta");
      append(
        meta,
        createElement("p", "entry-index", `[${item.index}]`),
        createElement("p", "status-pill", item.status),
      );
      const copy = createElement("div", "person-copy");
      append(
        copy,
        createElement("p", "person-role", item.role),
        createElement("h3", "", item.name),
        createElement("p", "dissertation-label", "Dissertation"),
        createElement("p", "dissertation-title", item.dissertation),
        createElement("p", "", item.summary),
      );
      const link = createElement("a", "person-link", externalMark("Profile"));
      link.href = item.url;
      link.setAttribute("aria-label", `Visit ${item.name}’s website`);
      append(article, meta, copy, link);
      return article;
    }),
  );
};

const renderHomeStudentMilestones = (mount, data) => {
  const names = data.advisees.map((item) => item.name);
  const sentence =
    names.length === 2
      ? `${names[0]} and ${names[1]} successfully defended their dissertations in 2026.`
      : `${names.join(", ")} completed recent doctoral milestones.`;
  mount.textContent = sentence;
};

const renderCurrentCommittees = (mount, data) => {
  mount.replaceChildren(
    ...data.committees.current.map((item) => {
      const li = createElement("li");
      const detail = [item.institution, "Advisor", item.advisor].filter(Boolean).join(" · ");
      append(li, createElement("span", "", item.name), createElement("small", "", detail));
      return li;
    }),
  );
};

const renderCompletedCommittees = (mount, data) => {
  mount.replaceChildren(
    ...data.committees.completed.map((item, index) => {
      const li = createElement("li");
      const copy = createElement("div");
      append(copy, createElement("h4", "", item.name), createElement("p", "", item.dissertation));
      append(li, createElement("span", "", String(index + 1).padStart(2, "0")), copy);
      return li;
    }),
  );
};

const renderCollaborations = (mount, data) => {
  mount.replaceChildren(
    ...data.collaborations.map((item) => {
      const article = createElement("article", "network-card");
      const copy = createElement("div");
      append(
        copy,
        createElement("p", "note-label", item.label),
        createElement("h3", "", item.title),
        createElement("p", "", item.summary),
      );
      append(
        article,
        createElement("p", "network-index", `[${item.index}]`),
        copy,
        createElement("p", "collaborator-list", item.people.join(" · ")),
      );
      return article;
    }),
  );
};

const renderHomeTeaching = (mount, data) => {
  mount.replaceChildren(
    ...data.homepageAreas.map((item) => {
      const article = createElement("article");
      const copy = createElement("div");
      append(copy, createElement("h3", "", item.title), createElement("p", "", item.summary));
      append(article, createElement("span", "", item.index), copy);
      return article;
    }),
  );
};

const renderCurrentCourses = (mount, data) => {
  mount.replaceChildren(
    ...data.upcoming.map((item) => {
      const article = createElement("article");
      const term = createElement("div", "course-term");
      append(term, createElement("span", "", item.term), createElement("strong", "", item.year));
      const copy = createElement("div");
      append(
        copy,
        createElement("p", "note-label", item.code),
        createElement("h3", "", item.title),
        createElement("p", "", item.summary),
      );
      append(article, term, copy, createElement("p", "course-level", item.level));
      return article;
    }),
  );
};

const renderCourseHistory = (mount, data) => {
  mount.replaceChildren(...data.history.map(timelineItem));
};

const renderLabPosts = (mount, data) => {
  mount.replaceChildren(
    ...data.items.map((item, index) => {
      const li = createElement("li");
      const copy = createElement("div");
      const title = createElement("h3");
      const link = createElement("a", "", item.title);

      link.href = item.url;
      link.target = "_blank";
      title.append(link);

      append(
        copy,
        createElement("p", "note-label", item.meta),
        title,
        createElement("p", "", item.summary),
      );
      const number = createElement("span", "", String(index + 1).padStart(2, "0"));
      append(li, createElement("p", "log-date", item.date), copy, number);
      return li;
    }),
  );
};

const renderAppointments = (mount, data) => {
  mount.replaceChildren(...data.appointments.map(timelineItem));
};

const renderCredentials = (mount, data) => {
  mount.replaceChildren(
    ...data.education.map((item) => {
      const article = createElement("article");
      const record = createElement("p");
      append(record, createElement("strong", "", `${item.recordLabel}: `), document.createTextNode(item.record));
      append(
        article,
        createElement("p", "entry-index", `[${item.index}]`),
        createElement("p", "note-label", `${item.period} · ${item.institution}`),
        createElement("h3", "", item.degree),
        createElement("p", "credential-field", item.field),
        record,
      );
      return article;
    }),
  );
};

const renderFunding = (mount, data) => {
  mount.replaceChildren(
    ...data.funding.map((item) => {
      const group = createElement("div");
      const copy = createElement("p");
      append(
        copy,
        createElement("strong", "", item.sponsor),
        document.createTextNode(`${item.title} · ${item.role}`),
      );
      append(group, createElement("span", "", item.period), copy);
      return group;
    }),
  );
};

const renderService = (mount, data) => {
  mount.replaceChildren(
    ...data.service.map((item) => {
      const article = createElement("article");
      append(
        article,
        createElement("p", "project-status", item.period),
        createElement("h3", "", item.title),
        createElement("p", "", item.organization),
      );
      return article;
    }),
  );
};

const renderProfiles = (mount, data) => {
  mount.replaceChildren(
    ...data.profiles.map((item) => {
      const link = createElement("a");
      link.href = item.url;
      append(
        link,
        createElement("span", "", `[${item.index}]`),
        createElement("p", "note-label", item.label),
        createElement("h3", "", item.title),
        createElement("p", "", item.summary),
        createElement("strong", "", item.url.startsWith("http") ? externalMark(item.linkLabel) : internalMark(item.linkLabel)),
      );
      return link;
    }),
  );
};

const renderers = {
  "home-projects": renderHomeProjects,
  "home-publications": renderHomePublications,
  publications: renderPublications,
  "homepage-project-ledger": renderHomepageProjectLedger,
  "research-projects": renderResearchProjects,
  "project-cases": renderProjectCases,
  systems: renderSystems,
  "project-timeline": renderProjectTimeline,
  advisees: renderAdvisees,
  "home-student-milestones": renderHomeStudentMilestones,
  "current-committees": renderCurrentCommittees,
  "completed-committees": renderCompletedCommittees,
  collaborations: renderCollaborations,
  "home-teaching": renderHomeTeaching,
  "current-courses": renderCurrentCourses,
  "course-history": renderCourseHistory,
  "lab-posts": renderLabPosts,
  appointments: renderAppointments,
  credentials: renderCredentials,
  funding: renderFunding,
  service: renderService,
  profiles: renderProfiles,
};

const renderMount = async (mount) => {
  const filename = mount.dataset.source;
  const renderer = renderers[mount.dataset.render];
  if (!filename || !renderer) return;

  mount.setAttribute("aria-busy", "true");
  try {
    const data = await loadData(filename);
    renderer(mount, data);
    mount.dataset.loaded = "true";
  } catch (error) {
    console.error(`Unable to render ${mount.dataset.render} from ${filename}`, error);
    renderError(mount, filename);
  } finally {
    mount.removeAttribute("aria-busy");
  }
};

const dynamicMounts = [...document.querySelectorAll("[data-render][data-source]")];

Promise.allSettled(dynamicMounts.map(renderMount)).then(() => {
  document.dispatchEvent(new CustomEvent("dynamic-content-loaded"));
});

function activePublicationFilter(section, group) {
  return (
    section.querySelector(
      `[data-publication-filter="${group}"].is-active`,
    )?.dataset.filterValue || "all"
  );
}

function applyPublicationFilters(section) {
  if (!section) return;

  const selectedType = activePublicationFilter(section, "type");
  const selectedTag = activePublicationFilter(section, "tag");
  const items = [...section.querySelectorAll("[data-publication-type]")];
  let visibleCount = 0;

  items.forEach((item) => {
    const typeMatches =
      selectedType === "all" || item.dataset.publicationType === selectedType;
    const itemTags = (item.dataset.publicationTags || "").split("|").filter(Boolean);
    const tagMatches = selectedTag === "all" || itemTags.includes(selectedTag);
    const visible = typeMatches && tagMatches;
    item.hidden = !visible;
    if (visible) visibleCount += 1;
  });

  const resultCount = section.querySelector("[data-publication-result-count]");
  if (resultCount) {
    const noun = visibleCount === 1 ? "publication" : "publications";
    resultCount.textContent = `${visibleCount} of ${items.length} ${noun} shown`;
  }

  const emptyState = section.querySelector("[data-publication-empty-state]");
  if (emptyState) emptyState.hidden = visibleCount !== 0;

  const reset = section.querySelector("[data-publication-filter-reset]");
  if (reset) reset.disabled = selectedType === "all" && selectedTag === "all";
}

const activatePublicationFilter = (button) => {
  const section = button.closest("section") || document;
  const group = button.dataset.publicationFilter;

  section
    .querySelectorAll(`[data-publication-filter="${group}"]`)
    .forEach((candidate) => {
      const active = candidate === button;
      candidate.classList.toggle("is-active", active);
      candidate.setAttribute("aria-pressed", String(active));
    });

  applyPublicationFilters(section);
};

const resetPublicationFilters = (button) => {
  const section = button.closest("section") || document;
  ["type", "tag"].forEach((group) => {
    section
      .querySelectorAll(`[data-publication-filter="${group}"]`)
      .forEach((candidate) => {
        const active = candidate.dataset.filterValue === "all";
        candidate.classList.toggle("is-active", active);
        candidate.setAttribute("aria-pressed", String(active));
      });
  });
  applyPublicationFilters(section);
};

const activateFilter = (button) => {
  const section = button.closest("section") || document;
  const selectedCategory = button.dataset.filter;
  section.querySelectorAll("[data-filter]").forEach((candidate) => {
    const active = candidate === button;
    candidate.classList.toggle("is-active", active);
    candidate.setAttribute("aria-pressed", String(active));
  });
  section.querySelectorAll("[data-category]").forEach((item) => {
    item.hidden = selectedCategory !== "all" && item.dataset.category !== selectedCategory;
  });
};

document.querySelectorAll("[data-filter]").forEach((button, index) => {
  button.setAttribute("aria-pressed", String(index === 0));
});

document.addEventListener("click", (event) => {
  const publicationFilter = event.target.closest("[data-publication-filter]");
  if (publicationFilter) {
    activatePublicationFilter(publicationFilter);
    return;
  }

  const publicationReset = event.target.closest("[data-publication-filter-reset]");
  if (publicationReset) {
    resetPublicationFilters(publicationReset);
    return;
  }

  const button = event.target.closest("[data-filter]");
  if (button) activateFilter(button);
});

const sectionLinks = [...document.querySelectorAll("[data-section-link]")];
const observedSections = [...document.querySelectorAll(".observed-section")];

if ("IntersectionObserver" in window && sectionLinks.length && observedSections.length) {
  const linkById = new Map(
    sectionLinks.map((link) => [link.dataset.sectionLink, link]),
  );

  const setActiveSection = (id) => {
    if (!linkById.has(id)) return;
    sectionLinks.forEach((link) => {
      const active = link === linkById.get(id);
      link.classList.toggle("is-active", active);
      if (active) {
        link.setAttribute("aria-current", "location");
      } else {
        link.removeAttribute("aria-current");
      }
    });
  };

  const observer = new IntersectionObserver(
    (entries) => {
      const visible = entries
        .filter((entry) => entry.isIntersecting)
        .sort((a, b) => b.intersectionRatio - a.intersectionRatio);
      if (visible[0]) setActiveSection(visible[0].target.id);
    },
    {
      rootMargin: "-18% 0px -62% 0px",
      threshold: [0.05, 0.2, 0.45],
    },
  );

  observedSections.forEach((section) => observer.observe(section));
}
