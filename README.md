# Mat Kelly — data-driven Scholarly Index

This package contains the complete, responsive Scholarly Index site. Repeated
content is stored in local JSON files and rendered by `script.js`, so routine
updates do not require editing HTML.

There is no application server, database, package manager, or build step. The
site runs as ordinary HTML, CSS, JavaScript, images, and JSON on Apache, Caddy,
Nginx, or any comparable web server.

## Important: use an HTTP server

Do not open `index.html` with a `file://` URL. Browsers normally block the JSON
requests in that mode. Serve this folder through Apache, Caddy, or a local test
server instead.

For a quick local preview:

```bash
python3 -m http.server 8000
```

Then visit `http://localhost:8000`.

## Publish with Apache

Copy the contents of this folder, including the hidden `.htaccess` file, into
the site's document root. No PHP or server-side module is required.

The included `.htaccess` sets `index.html` as the directory index, supplies the
JSON content type, disables directory listings when supported, and gives HTML
and JSON short-lived cache behavior. If the host ignores `.htaccess`, enable
`AllowOverride FileInfo Indexes` for the document root or move the equivalent
directives into the Apache virtual host.

## Publish with Caddy

The included `Caddyfile` serves the current directory on port 8080:

```bash
caddy run
```

For a public site, replace `:8080` in `Caddyfile` with the domain name and, if
needed, replace `root * .` with the absolute path to this folder. Caddy will
manage HTTPS automatically when a public domain resolves to the server.

## Edit content

The files in `data/` are the content source of truth:

| File | Content used by the site |
| --- | --- |
| `data/publications.json` | Publications, bibliography filters, and homepage selections |
| `data/projects.json` | Research projects, systems, and project chronology |
| `data/people.json` | Advisees, committees, milestones, and collaborations |
| `data/teaching.json` | Current courses, teaching areas, and course history |
| `data/lab-posts.json` | MAT Lab log entries |
| `data/cv.json` | Appointments, education, funding, and service |
| `data/site.json` | Contact and public-profile directory |

Edit a JSON file in a text editor, preserve its existing structure, save it,
and reload the relevant page. JSON requires double quotes and does not permit
trailing commas. A malformed file produces an on-page loading error instead of
silently presenting stale content.

The root `<html>` element on each page contains `data-data-root="data"`. Change
that value if the JSON directory moves. Keep the JSON on the same origin as the
pages unless the other server is explicitly configured for cross-origin
requests.

## Site files

- `index.html` — homepage and overview
- `research.html` — questions, methods, and active research
- `publications.html` — filterable selected bibliography
- `projects.html` — active projects, systems, and chronology
- `students.html` — advisees, committees, and collaborations
- `teaching.html` — current courses, approach, and history
- `lab.html` — MAT Lab mission, workstreams, and log
- `contact.html` — correspondence guidance and profile directory
- `cv.html` — readable curriculum vitæ overview
- `styles.css` — responsive desktop, tablet, and mobile styling
- `script.js` — navigation, JSON loading, rendering, and filtering
- `assets/` — local image and mark assets
- `data/` — editable content records
- `.htaccess` — optional Apache configuration
- `Caddyfile` — ready-to-edit Caddy configuration

## Implementation notes

- Rendering uses the browser's built-in Fetch and DOM APIs; no framework or
  third-party JavaScript is loaded.
- Data is inserted with `textContent`, so content records are not interpreted
  as arbitrary HTML.
- Publication filters operate after JSON content has loaded.
- The navigation collapses to an accessible menu on smaller screens.
- The left scholarly index tracks the visible section on larger screens.
- Reduced-motion preferences are respected.

The portrait remains the property of its original rights holder. The remaining
implementation is a redesign concept intended for review and refinement.
