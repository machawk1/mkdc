<?php

header('Memento-Datetime: '.gmdate('D, d M Y H:i:s ').'GMT');
header("X-Clacks-Overhead: GNU Terry Pratchett");
header('Link: <https://matkelly.com/>; rel="original", <https://matkelly.com/archive/mkdc.tm>; rel="timemap"; type="application/link-format"');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Homepage of Mat Kelly, Assistant Professor, Deparment of Information Science, Drexel University in Philadelphia, Pennsylvania." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#031fc9" />
    <title>Mat Kelly, Assistant Professor, Department of Information Science, Drexel University in Philadelphia, Pennsylvania</title>
    <link rel="stylesheet" href="_css/style.css" media="all" />
    <link rel="preload" href="/_font/IM_FELL_English_Roman.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/_font/manrope-medium.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="me" href="https://twitter.com/machawk1" />
    <link rel="me" href="https://github.com/machawk1" />
    <link rel="me" href="https://digipres.club/@machawk1" />

    <link rel="canonical" href="https://matkelly.com/" />
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@machawk1">
    <meta name="twitter:title" content="Mat Kelly">
    <meta name="twitter:description" content="Homepage of Mat Kelly, Assistant Professor, Drexel University.">
    <meta name="twitter:creator" content="@machawk1">
    <meta name="twitter:image" content="https://matkelly.com/_images/twitterCard_2020.png">
    <meta name="twitter:image:alt" content="Mat Kelly, PhD - Assistant Professor, Department of Information Science, College of Computing & Informatics, Drexel University, Philadelphia, Pennsylvania USA; Visit matkelly.com for more details on publications and open source software projects">
    <meta name="color-scheme" content="light dark">

    <link rel="manifest" href="manifest.webmanifest">
    <link rel="icon" sizes="192x192" href="./_images/favicon192.png">
    <link rel="apple-touch-icon" sizes="192x192" href="./_images/favicon192.png">
    <!--<script src="_js/html2canvas.js"></script>-->
    <script src="./_js/index.js" defer></script>
    <base href="https://matkelly.com/"> <!-- Just until large PDFs find a new home. -->
  </head>

  <body>
    <header itemscope itemtype="https://schema.org/Person">
    <p class="otaygugel">Assistant Professor, Department of Information Science, College of Computing &amp; Informatics, Drexel University in Philadelphia, Pennsylvania, USA</p>

        <img src="./_images/mug_matKelly.jpg" alt="mug shot" id="mugShot" itemprop="photo" />

      <h1 itemprop="name">Mat Kelly</h1>
      <h2 itemprop="title">Assistant Professor</h2>
      <h3 itemprop="affiliation"><a href="https://drexel.edu/cci/academics/information-science-department/" target="_blank" rel="external noopener noreferrer">Department of Information Science</a></h3>
      <h3 itemprop="affiliation"><a href="https://drexel.edu/cci/" target="_blank" rel="external noopener noreferrer">College of Computing &amp; Informatics</a></h3>
      <h3 itemprop="affiliation"><a href="https://drexel.edu" target="_blank" rel="external noopener noreferrer">Drexel University</a> &bull; Philadelphia, Pennsylvania &bull; USA</h3>
    </header>
    <nav>
      <ul id="sections">
        <li><a href="#currentProjects">Current/Upcoming Projects</a></li>
        <li><a href="#papersPostersAndPresentations">Papers, Posters &amp; Presentations</a></li>
        <li><a href="#recognitionAndParticipation">Recognition &amp; Participation</a></li>
        <li><a href="#teaching">Teaching</a></li>
        <!--<li class="hide"><a href="#courseworkHistory">Coursework History</a></li>-->
        <li><a href="#projects">Assorted Software Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        <li id="cv"><a target="_blank" rel="noopener noreferrer" href="https://matkelly.com/cv">C.V.</a></li>
      </ul>
    </nav>

    <section id="currentProjects">
      <h2>Current/Upcoming Projects</h2>
        <ul>
          <li>Planning development for the Drexel 2021 Faculty Summer Research Award relating to access and security of private web archives.</li>
          <li>Continued development of free and open-source web archiving software like <a href="https://github.com/oduwsdl/ipwb">InterPlanetary Wayback (ipwb)</a>, <a href="https://github.com/machawk1/warcreate">WARCreate</a>, <a href="https://matkelly.com/wail">Web Archiving Integration Layer (WAIL)</a>, and <a href="https://github.com/machawk1/mink">Mink</a>.</li>
        </ul>
    </section>

    <section id="papersPostersAndPresentations">
      <h2 id="ppp_heading">Papers, Posters &amp; Presentations</h2>
        <ul id="ppp_filter">
          <li class="ppp_active"><a id="ppp_all">All</a></li>
          <li><a id="ppp_pr">Only Peer-Reviewed</a></li>
          <li><a id="ppp_p">Only Papers</a></li>
          <li><a id="ppp_j">Only Journals</a></li>
          <li><a id="ppp_a">Only Awarded</a></li>
        </ul>
        <ul id="ppp" class="unfiltered"> 
          <li class="paper peerReviewed" data-venue="nasko" data-year="2021">Scott McClellan, Jane Greenberg, and <em class="me">Mat Kelly</em>, “Modeling Ephraim Chambers' Knowledge Structure From a Na&iuml;ve Standpoint,” Accepted to be in <em>Proceedings of The 8th North American Symposium on Knowledge Organization (NASKO 2021)</em>, Forthcoming July 9-11, 2021.</li>
          <li class="presentation peerReviewed" data-venue="ictessh" data-year="2021"><em class="me">Mat Kelly</em>, Christopher B. Rauch, Jane Greenberg, John Kunze, Sam Grabus, Joan Boone, John Kunze, and Peter M. Logan, “Archival Resource Keys for Collaborative Historical Ontology Publication,” To be presented at the <em>International Conference on ICT enhanced Social Sciences and Humanities (ICTeSSH 2021)</em>, Forthcoming June 28-30, 2021. (<a href="https://ictessh.uns.ac.rs/schedule/">schedule</a>)</li>
          <li class="presentation" data-venue="iipcwac" data-year="2021"><em class="me">Mat Kelly</em>, “WASAPIfying private web archiving tools for persistence and collaboration,” Presented at the <em>International Internet Preservation Consortium (IIPC) Web Archiving Conference (WAC) 2021</em>, Online, June 15-16, 2021. (<a href="/iipcwac2021">slides</a>, <a href="https://netpreserve.org/ga2021/overview/">schedule</a>)</li>  
          <li class="online journal peerReviewed" data-venue="code4lib" data-year="2020"><em class="me">Mat Kelly</em>, Christopher B. Rauch, Jane Greenberg, Sam Grabus, Joan Boone, John Kunze, and Peter M. Logan, “Advancing ARKs in the Historical Ontology Space,” <em>Code4Lib Journal</em>, Issue 50, Feb 2021. (<a href="https://journal.code4lib.org/articles/15608">article</a>, <a href="publications/kelly-c4l2021.bib">BibTeX</a>)</li>
          <li class="presentation" data-venue="pidapalooza" data-year="2021"><em class="me">Mat Kelly</em>, Jane Greenberg, Christopher B. Rauch, Joan P. Boone, John Kunze, and Peter Logan, “Of ARKs and Ontologies,” Presented at PIDapalooza, (2021), Online Meeting, 27-28 January 2021. (<a href="https://pidapalooza2021.sched.com/event/gD2D/of-arks-and-ontologies">Info</a>, <a href="publications/kelly-pidapalooza2021.bib">BibTeX</a>)</li>
          <li class="paper workshop" data-venue="cas" data-year="2020"><em class="me">Mat Kelly</em>, Jane Greenberg, Christopher B. Rauch, Sam Grabus, Joan P. Boone, John A. Kunze, and Peter Melville Logan, “A Computational Approach to Historical Ontologies,” In Proceedings of the 5th Computational Archival Science Workshop at the <em>2020 IEEE International Conference on Big Data (IEEE BigData 2020)</em>, Atlanta, Georgia, pp. 1878-1883, December 2020. (<a href="presentations/2020_ieeebigdata.pptx">Slides</a>, <a href="https://arxiv.org/abs/2011.13114">arXiv</a>, <a href="publications/kelly-bigdata2020.bib">BibTeX</a>, <a href="http://doi.org/10.1109/BigData50022.2020.9378268">DOI</a>)</li>
          <li class="presentation" data-venue="gsa" data-year="2020">Hyung Wook Choi, Rose DiMaria-Ghalili, <em class="me">Mat Kelly</em>, Alex Poole, Erjia Yan, and Jina Huh-Yoo, (2020) “Older Adults and Technology Use: A Systematic Literature Review,” Symposium presentation at the <em>Gerontological Society of America 2020 Annual Scientific Meeting</em>, Vol 4 (Suppl 1), pp. 823, Online Meeting, 4-7 November 2020. (<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7743231/pdf/igaa057.3004.pdf">PDF</a>, <a href="http://doi.org/10.1093/geroni/igaa057.3004">DOI</a>)</li>
          <li class="journal peerReviewed" data-venue="jdis" data-year="2021">Michal Monselise, Jane Greenberg, Ou Stella Liang, Sonia Pascua, Heejun Kim, <em class="me">Mat Kelly</em>, Joan P. Boone, and Christopher C. Yang, “An Automatic Approach to Extending the Consumer Health Vocabulary,” <em>Journal of Data and Information Science (JDIS)</em>, 6(1), pp. 35-49. 2021. (<a href="https://sciendo.com/de/article/10.2478/jdis-2021-0003" target="_blank" rel="external noopener noreferrer">Published Online Ahead of Print in 2020</a>). (<a href="papers/2020_jdis_chv.pdf">PDF</a>, <a href="publications/monselise-jdis2020.bib">BibTeX</a>, <a href="https://doi.org/10.2478/jdis-2021-0003">DOI</a>)</li>   
          <li class="paper workshop" data-venue="wadl" data-year="2020">Abigail Mabe, Dhruv Patel, Maheedhar Gunnam, Surbhi Shankar, <em class="me">Mat Kelly</em>, Sawood Alam, Michael L. Nelson, and Michele C. Weigle, “TMVis: Visualizing Webpage Changes Over Time,” Presented at the <em>ACM/IEEE JCDL 2020 Workshop on Web Archiving and Digital Libraries (WADL 2020)</em>, Wuhan, China, August 2020.  (<a href="publications/mabe-wadl2020.bib">BibTeX</a>)</li>
          <li class="paper" data-venue="arxiv" data-year="2020">Abigail Mabe, Dhruv Patel, Maheedhar Gunnam, Surbhi Shankar, <em class="me">Mat Kelly</em>, Sawood Alam, Michael L. Nelson, and Michele C. Weigle, “Visualizing Webpage Changes Over Time,” Technical Report arXiv:2006.02487, 2020. (<a href="https://arxiv.org/abs/2006.02487">PDF</a>, <a href="publications/mabe-arxiv2020.bib">BibTeX</a>)</li>
          <li class="presentation" data-venue="sati" data-year="2020"><em class="me">Mat Kelly</em>, “Weaving in the Loose Ends of Novel Web Archiving Approaches,” Presented at <em>Save All the Internet: Web Archiving Tools and Tips</em>, Newark, Delaware, 30 March 2020. (<a href="saveTheInternet">Slides</a>)</li>
          <li class="presentation" data-venue="dweb" data-year="2018">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “InterPlanetary Wayback: The Next Step Towards Decentralized Web Archiving,” Presented at the <em>Decentralized Web Summit</em>, San Francisco, California, August 2018. (<a href="presentations/2018_dweb_ipwb.pdf">Slides</a>)</li>
          <li class="paper workshop" data-venue="wadl" data-year="2018"><em class="me">Mat Kelly</em>, Sawood Alam, Michael L. Nelson, and Michele C. Weigle, “Client-Assisted Memento Aggregation Using the Prefer Header,” Presented at the <em>Web Archiving and Digital Libraries Workshop (WADL 2018)</em>, Fort Worth, Texas, June 2018. (<a href="papers/2018_wadl_preferData.pdf">PDF</a>, <a href="publications/kelly-wadl2018.bib">BibTeX</a>)</li>
          <li class="poster workshop" data-venue="wadl" data-year="2018">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “A Survey of Archival Replay Banners,” Presented at the <em>Web Archiving and Digital Libraries Workshop (WADL 2018)</em>, Fort Worth, Texas, June 2018. (<a href="papers/2018_wadl_banners.pdf">PDF</a>, <a href="publications/alam-wadl2018.bib">BibTeX</a>)</li>
          <li class="paper longPaper peerReviewed award" data-venue="jcdl" data-year="2018"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “A Framework for Aggregating Private and Public Web Archives,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>, Fort Worth, Texas, June 2018, pp. 273-282. <em class="best">Best Paper Award Nominee</em>. (<a href="papers/2018_jcdl_hierarchy.pdf">PDF</a>, <a href="publications/kelly-jcdl2018.bib">BibTeX</a>, <a href="https://doi.org/10.1145/3197026.3197045">DOI</a>)</li>
          <li class="poster peerReviewed award" data-venue="jcdl" data-year="2018">Mohamed Aturban, <em class="me">Mat Kelly</em>, Sawood Alam, John A. Berlin, Michael L. Nelson, and Michele C. Weigle, “ArchiveNow: Simplified, Extensible, Multi-Archive Preservation,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>, Fort Worth, Texas, June 2018, pp. 321-322. <em class="best">Best Poster Award</em>. (<a href="papers/2018_jcdl_archivenow.pdf">PDF</a>, <a href="publications/aturban-jcdl2018.bib">BibTeX</a>, <a href="https://doi.org/10.1145/3197026.3203880">DOI</a>)</li>
          <li class="poster peerReviewed" data-venue="jcdl" data-year="2018">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle and Michael L. Nelson, “Unobtrusive and Extensible Archival Replay Banners Using Custom Elements,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>, Fort Worth, Texas, June 2018, pp. 319-320. (<a href="papers/2018_jcdl_banners.pdf">PDF</a>, <a href="publications/alam-jcdl2018.bib">BibTeX</a>, <a href="https://doi.org/10.1145/3197026.3203881">DOI</a>)</li>
          <li class="poster workshop" data-venue="wadl" data-year="2017"><em class="me">Mat Kelly</em>, Lulwah M. Alkwai, Sawood Alam, Michael L. Nelson, Michele C. Weigle, and Herbert Van de Sompel, “Impact of URI Canonicalization on Memento Count,” Presented at the <em>Web Archiving and Digital Libraries Workshop (WADL 2017)</em>. Toronto, Canada, June 2017. (<a href="papers/2017_wadl_countingMementos.pdf">PDF</a>)</li>
          <li class="poster workshop" data-venue="wadl" data-year="2017">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “Avoiding Zombies in Archival Replay Using ServiceWorker,” Presented at the <em>Web Archiving and Digital Libraries Workshop (WADL 2017)</em>. Toronto, Canada, June 2017. (<a href="papers/2017_wadl_serviceWorkers.pdf">PDF</a>)</li>
          <li class="poster peerReviewed award" data-venue="jcdl" data-year="2017"><em class="me">Mat Kelly</em>, Lulwah M. Alkwai, Sawood Alam, Michael L. Nelson, Michele C. Weigle, and Herbert Van de Sompel, “Impact of URI Canonicalization on Memento Count,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Toronto, Canada, June 2017, pp. 303-304.  <em class="best">Best Poster Award</em>. (<a href="papers/2017_jcdl_countingMementos.pdf">PDF</a>, <a href="publications/kelly-jcdl2017.bib">BibTeX</a>, <a href="https://doi.org/10.1109/JCDL.2017.7991601">DOI</a>)</li>
          <li class="paper shortPaper" data-venue="jcdl" data-year="2017">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “Client-side Reconstruction of Composite Mementos Using ServiceWorker,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Toronto, Canada, June 2017, pp. 237-240. (<a href="papers/2017_jcdl_serviceWorker.pdf">PDF</a>, <a href="https://docs.google.com/presentation/d/18AjqyhpAmdRWsQLibXLdf6qg4a7_uGoaHBgEl1227YM/edit?ts=5948226b#slide=id.p">Slides</a>, <a href="publications/alam-jcdl2017.bib">BibTeX</a>, <a href="https://doi.org/10.1109/JCDL.2017.7991579">DOI</a>)</li>
          <li class="poster peerReviewed" data-venue="jcdl" data-year="2017">John A. Berlin, <em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “WAIL: Collection-Based Personal Web Archiving,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Toronto, Canada, June 2017, pp. 340-341. (<a href="papers/2017_jcdl_wail.pdf">PDF</a>, <a href="publications/berlin-jcdl2017.bib">BibTeX</a>, <a href="https://doi.org/10.1109/JCDL.2017.7991619">DOI</a>)</li>
          <li class="presentation" data-venue="iipcwac" data-year="2017"><em class="me">Mat Kelly</em> and David Dias, “A Collaborative, Secure, and Private InterPlanetary Wayback Archiving System using IPFS,” Presented at the <em>International Internet Preservation Consortium (IIPC) Web Archiving Conference (WAC) 2017</em>, London, England, 15 June 2017. (<a href="presentations/2017_iipcwac_ipwb.pdf">Slides</a>)</li>
          <li class="presentation" data-venue="iipcwac" data-year="2017">Michele C. Weigle, Michael L. Nelson, <em class="me">Mat Kelly</em>, and John Berlin, “Archive What I See Now - Personal Web Archiving with WARCS,” Presented at the <em>International Internet Preservation Consortium (IIPC) Web Archiving Conference (WAC)</em>, London, England, 15 June 2017.  (<a href="presentations/2017_iipcwac_neh.pdf">Slides</a>)</li>
          <li class="presentation" data-venue="archivesunleashed" data-year="2017"><em class="me">Mat Kelly</em>, “Tools for the Personal Web Archivist: WARCreate, WAIL, Mink, InterPlanetary Wayback,” Presented At <em>Archives Unleashed 4.0: Web Archive Datathon</em>, 12 June 2017. (<a href="https://docs.google.com/presentation/d/1MgtXbv7K-LJ4C7w9CrLaGvNbMzCD2eLeK1dhlQ-nzAc/edit?usp=sharing">Slides</a>)</li>
          <li class="online" data-venue="tcdl" data-year="2017">Sawood Alam, <em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “InterPlanetary Wayback: The Permanent Web Archive,” <em>Bulletin of IEEE Technical Committee on Digital Libraries (IEEE-TCDL)</em>, Vol. 13, No. 1, April 2017.  (<a href="publications/alam-tcdl2017.bib">BibTeX</a>, <a href="https://bulletin.jcdl.org/Bulletin/v13n1/papers/alam.pdf">PDF</a>)</li>
          <li class="paper" data-venue="arxiv" data-year="2017"><em class="me">Mat Kelly</em>, Lulwah M. Alkwai, Michael L. Nelson, Michele C. Weigle, and Herbert Van de Sompel, “Impact of URI Canonicalization on Memento Count,” Technical Report arXiv:1703.03302, 2017. (<a href="https://arxiv.org/abs/1703.03302">PDF</a>, <a href="publications/kelly-arXiv2017.bib">BibTeX</a>)</li>
          <li class="paper shortPaper peerReviewed" data-venue="tpdl" data-year="2016"><em class="me">Mat Kelly</em>, Sawood Alam, Michael L. Nelson, and Michele C. Weigle, “InterPlanetary Wayback: Peer-To-Peer Permanence of Web Archives,” In <em>Proceedings of the International Conference on Theory and Practice of Digital Libraries (TPDL)</em>. Hannover, Germany, September 2016, pp. 411-416. (<a href="papers/2016_tpdl_ipwb.pdf">PDF</a>, <a href="presentations/2016_tpdl_ipwb.pdf">slides</a>, <a href="publications/kelly-tpdl2016.bib">BibTeX</a>, <a href="https://doi.org/10.1007/978-3-319-43997-6_35">DOI</a>)</li>
          <li class="poster workshop" data-venue="wadl" data-year="2016"><em class="me">Mat Kelly</em>, Sawood Alam, Michael L. Nelson, and Michele C. Weigle, “InterPlanetary Wayback: The Permanent Web Archive,” At the <em>Web Archiving and Digital Libraries Workshop (WADL 2016)</em>. Newark, NJ, June 2016.</li>
          <li class="poster peerReviewed" data-venue="jcdl" data-year="2016">Sawood Alam, <em class="me">Mat Kelly</em>, and Michael L. Nelson, “InterPlanetary Wayback: The Permanent Web Archive,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Newark, NJ, June 2016, pp. 273-274.  (<a href="papers/2016_jcdl_ipwb.pdf">PDF</a>, <a href="publications/alam-jcdl2016.bib">BibTeX</a>, <a href="https://doi.org/10.1145/2910896.2925467">DOI</a>)</li>
          <li class="presentation" data-venue="archivesunleashed" data-year="2016"><em class="me">Mat Kelly</em>, “Exploring Aggregation of Personal, Private, and Institutional Web Archives,” Presented At <em>Archives Unleashed 2.0: Web Archive Datathon</em>, 2016 June 15. (<a href="presentations/2016_archivesUnleashed_aggregation.pptx">PPTX</a>)</li>
          <li class="journal peerReviewed" data-venue="ijdl" data-year="2016">Justin F. Brunelle, <em class="me">Mat Kelly</em>, Michele C. Weigle and Michael L. Nelson, “The Impact of JavaScript on Archivability,” <em>International Journal on Digital Libraries (IJDL)</em>, 17(2), pp. 95-117. January 2016. (<a href="https://link.springer.com/article/10.1007%2Fs00799-015-0140-8">article</a>, <a href="publications/brunelle-ijdl2015-impact.bib">BibTeX</a>, <a href="http://dx.doi.org/10.1007%2Fs00799-015-0140-8">DOI</a>)</li>
          <li class="online" data-venue="tcdl" data-year="2015"><em class="me">Mat Kelly</em>, “A Framework for Aggregating Private and Public Web Archives,” <em>Bulletin of IEEE Technical Committee on Digital Libraries (IEEE-TCDL)</em>, Vol. 11, No. 3, December 2015.  (<a href="publications/kelly-tcdl2015.bib">BibTeX</a>, <a href="https://bulletin.jcdl.org/Bulletin/v11n3/papers/149-Kelly.pdf">PDF</a>)</li>
          <li class="presentation" data-venue="jcdldc" data-year="2015"><em class="me">Mat Kelly</em>, “A Framework for Aggregating Private and Public Web Archives,” at the <em>ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Doctoral Consortium. Knoxville, TN, June 2015. <!--(<a href="papers/2015_jcdl_aframework.pdf">PDF</a>, <a href="publications/kelly-jcdl2015.bib">BibTeX</a>)--></li>
          <li class="poster peerReviewed award" data-venue="jcdl" data-year="2015">Wesley Jordan, <em class="me">Mat Kelly</em>, Justin F. Brunelle, Laura Vobrak, Michele C. Weigle and Michael L. Nelson, “Mobile Mink: Merging Mobile and Desktop Archived Webs,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Knoxville, TN, June 2015, pp. 243-244, <em class="best">Best Poster Award</em>. (<a href="papers/2015_jcdl_mobileMink.pdf">PDF</a>, <a href="publications/jordan-jcdl2015.bib">BibTeX</a>, <a href="https://doi.org/10.1145/2756406.2756956">DOI</a>)</li>
          <li class="presentation" data-venue="wac" data-year="2015"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “Visualizing Digital Collections of Web Archives,” <em>Web Archiving Collaboration: New Tools and Models</em>; 2015 June 4; New York City, NY. (<a href="presentations/2015_columbiawac_thumbnails.pptx">PPTX</a>)</li>
          <li class="journal peerReviewed" data-venue="ijdl" data-year="2015">Justin F. Brunelle, <em class="me">Mat Kelly</em>, Hany SalahEldeen, Michele C. Weigle, and Michael L. Nelson, “Not All Mementos Are Created Equal: Measuring the Impact of Missing Resources,” <em>International Journal on Digital Libraries (IJDL)</em>, 16(3), pp. 283-301. May 2015. (<a href="https://link.springer.com/article/10.1007/s00799-015-0150-6">article</a>, <a href="publications/brunelle-ijdl2015-damage.bib">BibTeX</a>, <a href="https://doi.org/10.1007/s00799-015-0150-6">DOI</a>)</li>
          <li class="presentation" data-venue="vsgc" data-year="2015"><em class="me">Mat Kelly</em>, “Facilitation of the A Posteriori Replication of Web Published Satellite Imagery,” <em>Virginia Space Grant Consortium 2015 Student Research Conference</em>. 2015 April 17; Hampton, VA. (<a href="papers/2015_vsgc_imagery.pdf">PDF</a>, <a href="presentations/2015_vsgc_imagery.pptx">PPTX</a>, <a href="publications/kelly-vsgc2015.bib">BibTeX</a>)</li>
          <li class="paper longPaper peerReviewed" data-venue="milcom" data-year="2014">Michael Ruffing, Yangyang He, <em class="me">Mat Kelly</em>, Jason O. Hallstrom, Stephan Olariu, and Michele C. Weigle, “A Retasking Framework For Wireless Sensor Networks,” In <em>Proceedings of the IEEE Military Communications Conference (MILCOM)</em>. Baltimore, MD, 2014 October 6-8, pp. 1066-1071 (<a href="papers/2014_milcom_retasking.pdf">PDF</a>, <a href="publications/ruffing-milcom2014.bib">BibTeX</a>, <a href="https://doi.org/10.1109/MILCOM.2014.181">DOI</a>)</li>
          <li class="paper longPaper peerReviewed award" data-venue="jcdl" data-year="2014">Justin F. Brunelle, <em class="me">Mat Kelly</em>, Hany SalahEldeen, Michele C. Weigle, and Michael L. Nelson, “Not All Mementos Are Created Equal: Measuring The Impact Of Missing Resources,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. London, England, September 2014, pp. 321-330, <em class="best">Best Student Paper Award</em>. (<a href="papers/2014_dl_damage.pdf">PDF</a>, <a href="publications/brunelle-dl2014.bib">BibTeX</a>)</li>
          <li class="paper shortPaper peerReviewed" data-venue="jcdl" data-year="2014"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “The Archival Acid Test: Evaluating Archive Performance on Advanced HTML and JavaScript,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. London, England, September 2014, pp. 25-28. (<a href="papers/2014_dl_acid.pdf">PDF</a>, <a href="publications/kelly-dl2014-acid.bib">BibTeX</a>, <a href="https://doi.org/10.1109/JCDL.2014.6970146">DOI</a>)</li>
          <li class="poster peerReviewed" data-venue="jcdl" data-year="2014"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “Mink: Integrating the Live and Archived Web Viewing Experience Using Web Browsers and Memento,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. London, England, September 2014, pp. 469-470. (<a href="papers/2014_dl_mink.pdf">PDF</a>, <a href="publications/kelly-dl2014-mink.bib">BibTeX</a>, <a href="https://doi.org/10.1109/JCDL.2014.6970229">DOI</a>)</li>
          <li class="presentation" data-venue="digipres" data-year="2014">Michael L. Nelson, Scott G. Ainsworth, Justin F. Brunelle, <em class="me">Mat Kelly</em>, Hany SalahEldeen, and Michele C. Weigle, “Assessing the Quality of Web Archives,” <em>Digital Preservation 2014</em>, Future of Web Archiving Panel; 2014 July 23; Washington, DC. (<a href="presentations/2014_digitalPreservation.ppt">PPT</a>)</li>
          <li class="poster" data-venue="digipres" data-year="2014"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “Efficient Thumbnail Summarization for Web Archives,” Digital Preservation 2014, Poster Session; 2014 July 22; Washington, DC. (<a href="posters/2014_digpres_thumbnails.pdf">PDF</a>)</li>
          <li class="online peerReviewed" data-venue="dlib" data-year="2013"><em class="me">Mat Kelly</em>, Justin F. Brunelle, Michele C. Weigle and Michael L. Nelson, “A Method for Identifying Personalized Representations in the Archives,”  <em>D-Lib Magazine</em>, 19(11/12), 2013. (<a href="http://www.dlib.org/dlib/november13/kelly/11kelly.html">article</a>, <a href="publications/kelly-dlib2013.bib">BibTeX</a>, <a href="https://doi.org/10.1045/november2013-kelly">DOI</a>)</li>
          <li class="presentation" data-venue="ait" data-year="2013"><em class="me">Mat Kelly</em>, “Archive What I See Now,”  <em>Archive-It Partner Meeting</em>. Salt Lake City, UT, 2013 November 12. (<a href="presentations/2013_archiveItPartnerMeeting_archiveWhatISeeNow.pptx">PPTX</a>)</li>
          <li class="poster peerReviewed" data-venue="ieeevis" data-year="2013"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “Graph-Based Navigation of a Box Office Prediction System,”  In <em>Proceedings of the IEEE VIS 2013</em>. Atlanta, GA, 2013 October 13-18. (<a href="papers/2013_ieeevis_boxofficeprediction.pdf">PDF</a>, <a href="posters/2013_vis_boxoffice.pdf">Poster</a>, <a href="publications/kelly-vis2013.bib">BibTeX</a>)</li>
          <li class="presentation" data-venue="wds" data-year="2013">Michael L. Nelson, Scott G. Ainsworth, Justin F. Brunelle, <em class="me">Mat Kelly</em>, Hany SalahEldeen, and Michele C. Weigle, “Who Will Archive the Archives? Thoughts About the Future of Web Archiving,”  Wolfram Data Summit 2013. Washington, DC, 2013 September 5-6. (<a href="presentations/2013_wolframDataSumnmit_archiveTheArchives.ppt">PPT</a>)</li>
          <li class="presentation" data-venue="digipres" data-year="2013"><em class="me">Mat Kelly</em>, Michael L. Nelson, and Michele C. Weigle, “WARCreate and WAIL: WARC, Wayback and Heritrix Made Easy,” <em>Digital Preservation 2013</em>, Workshops and Sessions: Web Archiving; 2013 July 24; Alexandria, VA. (<a href="presentations/2013_digitalPreservation_heritrixMadeEasy.pptx">PPTX</a>)</li>
          <li class="paper longPaper peerReviewed" data-venue="tpdl" data-year="2013"><em class="me">Mat Kelly</em>, Justin F. Brunelle, Michele C. Weigle, and Michael L. Nelson, “On the Change in Archivability of Websites Over Time,” In <em>Proceedings of the International Conference on Theory and Practice of Digital Libraries (TPDL)</em>. Valletta, Malta, September 2013, pp. 35-47 (<a href="papers/2013_tpdl_archivabilityOverTime_final.pdf">PDF</a>, <a href="publications/kelly-tpdl2013.bib">BibTeX</a>, <a href="https://doi.org/10.1007/978-3-642-40501-3_5">DOI</a>)</li>
          <li class="poster" data-venue="pda" data-year="2013"><em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “Making Enterprise-Level Archive Tools Accessible for Personal Web Archiving,” <em>Personal Digital Archiving 2013</em>; 2013 February 21; College Park, MD. (<a href="posters/2013_pda_wail.pdf">PDF</a>, <a href="publications/kelly-pda2013.bib">BibTeX</a>)</li>
          <li class="poster" data-venue="digipres" data-year="2012"><em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “WARCreate - Create Wayback-Consumable WARC Files from Any Webpage,” Digital Preservation 2012, Tools Demo Session: Web Archiving; 2012 July 25; Washington, DC. (<a href="presentations/2012_digitalPreservation_warcreate.pptx">PPTX</a>, <a href="presentations/2012_digitalPreservation_warcreate.zip">PPTX w/ videos</a>)</li>
          <li class="poster peerReviewed" data-venue="jcdl" data-year="2012"><em class="me">Mat Kelly</em> and Michele C. Weigle, “WARCreate - Create Wayback-Consumable WARC Files from Any Webpage,” In <em>Proceedings of the ACM/IEEE Joint Conference on Digital Libraries (JCDL)</em>. Washington, DC, June 2012, pp. 437-438 (<a href="papers/2012_jcdl_warcreate.pdf">PDF</a>, <a href="posters/2012_jcdl_warcreate.pdf">Poster</a>, <a href="publications/kelly-jcdl2012.bib">BibTeX</a>, <a href="https://doi.org/10.1145/2232817.2232930">DOI</a>)</li>
          <li class="poster peerReviewed" data-venue="agu" data-year="2011">Thad Chee (Science Systems &amp; Applications, Inc., Hampton, VA), <em class="me">Matthew Kelly</em> (Science Systems &amp; Applications, Inc., Hampton, VA), Louis Nguyen (NASA-Langley Research Center, Hampton, VA), Patrick Minnis (NASA-Langley Research Center, Hampton, VA), Rabindra Palikonda, Douglas A. Spagenberg (Science Systems &amp; Applications, Inc., Hampton, VA), J. Kirk Ayers (Science Systems &amp; Applications, Inc., Hampton, VA). Access to Real-time and Historic Satellite Products from a Mobile Application. <em>American Geophysical Union Fall Meeting</em>; 2011 December 5-9; San Francisco, CA. (<a href="posters/2012_agu_cloudproducts.ppt">PPT</a>,  <a href="publications/chee-agu2011.bib">BibTeX</a>)</li>
          <li class="poster" data-venue="tidewater" data-year="2011"><em class="me">Mat Kelly</em>, Syed R. Rizvi, Liang Chen, Chinmay Lokesh, Stephan Olariu, and Michele C. Weigle, “ALERT: A Next-generation Emergency Response System for First Responders using Retasking of Wireless Sensor Networks,” <em>13th Annual Tidewater Student Research Poster Session</em>; 2011 November 18; Newport News, VA. (<a href="posters/2011_cnu_alert.pdf">PDF</a>)</li>
          <li class="presentation" data-venue="digipres" data-year="2011"><em class="me">Mat Kelly</em>, Michele C. Weigle, and Michael L. Nelson, “Archiving Your Facebook Pages Using Archive Facebook,” NDIIPP/NDSA Partners Meeting Special Interest Session: Web Archiving; 2011 July 20; Washington, DC. (<a href="presentations/2011_ndiipp_archivefacebook.pptx">PPTX</a>)</li>
          <li class="whitePaper" data-year="2009">David Helman (BMW Group, Greenville, SC), <em class="me">Matthew Kelly</em> (BMW Group, Greenville, SC), Martin Guttmann (Intel Corporation, Santa Clara, CA), Bill Carter (Intel Corporation, Santa Clara, CA), Enrique Castro-Leon (Intel Corporation, Santa Clara, CA), Thomas Kellerer (Intel Corporation, Santa Clara, CA), Dror Shenkar (Intel Corporation, Santa Clara, CA), “Preserving Performance While Saving Power Using Intel Intelligent Power Node Manager and Intel Data Center Manger,” December 2009. (<a href="http://web.archive.org/web/20131020165022/http://software.intel.com/sites/datacentermanager/node_manager_white_paper_bmw.pdf">article (archived)</a>, <a href="papers/2009_intel_node_manager_white_paper_bmw.pdf">PDF</a>)</li>
        </ul>
    </section>

    <section id="recognitionAndParticipation">
      <h2>Recognition &amp; Participation</h2>
      <ul>
        <li>Reviewer, <a href="https://www.iospress.nl/journal/journal-of-computer-security/">Journal of Computer Security</a>, May 2021.</li>
        <li><a href="https://www.springer.com/journal/799/editors">Managing Editor</a>, <a href="https://www.springer.com/journal/799">International Journal on Digital Libraries (IJDL)</a>, April 2021-present.</li>  
        <li>Organizing Committee, Virtual Meeting Support Commitee Chair, <a href="https://2021.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2021</a> (Upcoming September 2021).</li>  
        <li>Reviewer, <a href="https://2020.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2021</a>, May 2021.</li>
        <li><a href="https://www.diglib.org/catching-up-with-past-ndsa-innovation-awards-winners-mat-kelly-phd/">Featured Interviewee</a>, National Digital Stewardship Alliance (NDSA) blog, July 2020.</li>
        <li>Reviewer, <a href="https://2020.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2020</a>, February 2020.</li>
        <li>Sole Presenter, <a href="https://matkelly.com/presentations/2020_drexelccimsiwebinar.pdf" >“Save My Web Things For Me and Others but Not All”</a> for the <a href="https://drexel.edu/cci/events/details/?eid=28714&iid=76409">Drexel CCI Master's of Information Webinar Series</a>, February 2020.</li>
        <li>Invited Guest Presenter, <a href="https://www.cs.odu.edu/~mweigle/">Michele C. Weigle</a>'s <a href="https://www.cs.odu.edu/~mweigle/CS800-S20/">CS800 - Research Methods</a>, Old Dominion University, January 2020.</li>
        <li>Reviewer, <a href="https://ecir2020.org/">European Conference on Information Retrieval (ECIR) 2020</a>, November 2019.</li>
        <li>Invited Guest Presenter, “<a href="presentations/2019_drexel_info821.pdf" target="_blank" rel="external noopener noreferrer">On Archival Negotiation Beyond Time</a>”, <a href="https://drexel.edu/cci/about/directory/G/Greenberg-Jane/">Jane Greenberg</a>'s Foundations of Information Science, Drexel University, October 2019.</li>
        <li>Invited Guest Presenter, “<a href="presentations/2019_psu_aframework.pdf" target="_blank" rel="external noopener noreferrer">A Framework for Aggregating Private and Public Web Archives</a>”, <a href="http://wang.ist.psu.edu/docs/home.shtml">James Z. Wang</a>'s Data Science course, Penn State University, February 2019.</li>
        <li>Invited Guest Presenter, “<a href="presentations/2019_psu_tools.pdf" target="_blank" rel="external noopener noreferrer">On Tool Building and Evaluation of the Archived Web</a>”, <a href="http://clgiles.ist.psu.edu/IST441/">IST441 - Information Retrieval and Search Engines</a>, Penn State University, February 2019.</li>
        <li>Organizing Committee, <a href="https://2019.jcdl.org/2019.jcdl.org/about/organizing-committees/index.html">Publicity Chair</a>, <a href="https://2019.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2019</a>.</li>
        <li>Reviewer, <a href="https://2019.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2019</a>, February 2019.</li>
        <li>Reviewer, <a href="https://link.springer.com/journal/799">International Journal on Digital Libraries (IJDL)</a>, 2018.</li>
        <li>Best Paper Finalist for <a href="papers/2018_jcdl_hierarchy.pdf">“A Framework for Aggregating Private and Public Web Archives”</a> at the ACM/IEEE Joint Conference on Digital Libraries (JCDL), June 2018.</li>
        <li><a href="http://jcdl.org/awards.php">Best Poster</a> for <a href="papers/2018_jcdl_archivenow.pdf">“ArchiveNow: Simplified, Extensible, Multi-Archive Preservation”</a> at the ACM/IEEE Joint Conference on Digital Libraries (JCDL), June 2018.</li>
        <li>Reviewer, <a href="https://2018.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2018</a>, January 2018.</li>
        <li>Organizing Committee, <a href="https://2018.jcdl.org/organizing_committee.htm">Publicity Chair</a>, <a href="https://2018.jcdl.org/">Joint Conference on Digital Libraries (JCDL) 2018</a>.</li>
        <li><a href="http://jcdl.org/awards.php">Best Poster</a> for <a href="papers/2017_jcdl_countingMementos.pdf">“Impact of URI Canonicalization on Memento Count”</a> at the ACM/IEEE Joint Conference on Digital Libraries (JCDL), June 2017.</li>
        <li>Participant and Presenter, <a href="https://archivesunleashed.com/au4-0-british-invasion/">Archives Unleashed 4.0: Web Archive Datathon</a>, June 2017.</li>
        <li>Reviewer, <a href="https://accessconference.ca/">Access 2017</a>, May 2017.</li>
        <li>Scholarship Awardee, <a href="https://www.rjionline.org/stories/graduate-students-receive-scholarships-to-attend-digital-news-preservati">Donald W. Reynolds Journalism Institute</a>, October 2016.</li>
        <li>Participant, <a href="http://web.archive.org/web/20170316134941/http://netpreserve.org/events/iipc-crawler-hackathon-london-2016">IIPC “Building Better Crawlers” Hackathon</a>, September 2016.</li>
        <li>Invited Participant and Presenter, <a href="https://archivesunleashed.com/au2-0-library-of-congress/">Archives Unleashed 2.0: Web Archive Datathon</a>, June 2016.</li>
        <li>Invited Participant, <a href="https://archivesunleashed.ca">Archives Unleashed: Web Archive Hackathon</a>, March 2016.</li>
        <li>Sole Presenter, Old Dominion University Department of Computer Science PhD Gathering, November 2015.</li>
        <li><a href="http://jcdl.org/awards.php">Best Poster</a> for <a href="papers/2015_jcdl_mobileMink.pdf">“Mobile Mink: Merging Mobile and Desktop Archived Webs”</a> at the ACM/IEEE Joint Conference on Digital Libraries (JCDL), June 2015.</li>
        <li><a href="http://jcdl.org/awards.php">Best Student Paper</a> for <a href="papers/2014_dl_damage.pdf">“Not All Mementos Are Created Equal: Measuring The Impact Of Missing Resources”</a> at ACM/IEEE Digital Libraries 2014, September 2014.</li>
        <li>NASA <a href="http://vsgc.odu.edu/graduatefellowships/">Virginia Space Grant Consortium</a> <a href="http://web.archive.org/web/20170307002859/http://vsgc.odu.edu/awardees/20142015/">Graduate Fellow</a>, August 2014.</li>
        <li><a href="presentations/2014_pesUniversity_browserBasedDigitalPreservation.pptx">Doctoral Student Presenter</a>, “Browser-Based Digital Preservation” for Visiting <a href="http://pes.edu/">PES University</a> Students, Old Dominion University, July 2014.</li>
        <li>Acknowledged Contributor, <a href="https://tools.ietf.org/html/rfc7089">RFC7089: HTTP Framework for Time-Based Access to Resource States -- Memento</a>, December 2013.</li>
        <li><a href="presentations/2013_cs595_movieExplorer.pptx">Guest Presenter</a>, CS595 - Intro to Web Science, Old Dominion University, October 2013.</li>
        <li><a href="https://blogs.loc.gov/thesignal/2012/08/warcreate-and-future-stewardship-an-interview-with-mat-kelly/">Featured Interviewee</a>, The Signal Digital Preservation Blog, August 2012.</li>
        <li><a href="https://cs.harding.edu/wac-workshop2012/participants.html">Participant</a>, Web Archiving Cooperative (WAC) Summer Workshop, June 2012.</li>
        <li><a href="https://blogs.loc.gov/thesignal/2012/06/announcing-five-ndsa-innovation-award-winners/">Future Steward Innovation Award Recipient</a>, National Digital Stewardship Alliance (NDSA) / Library of Congress, July 2012.</li>
        <li><a href="http://web.archive.org/web/20160920041500/http://www.cs.odu.edu:80/show_past_features.shtml?64">Featured Grad Student</a>, Old Dominion University Computer Science Department, June 2012.</li>
        <li>Reviewer, Joint Conference on Digital Libraries (JCDL) 2012, March 2012.</li>
      </ul>
    </section>

    <section id="teaching">
      <h2>Teaching</h2>
      <ul>
        <li class="drexel">Spring 2021: INFO202 - Data Curation</li>
        <li class="drexel">Winter 2021: INFO624 - Information Retrieval Systems</li>
        <li class="drexel">Fall 2020: INFO600 - Web Systems &amp; Architecture</li>
        <li class="drexel">Summer 2020: INFO624 - Information Retrieval System</li>
        <li class="drexel">Spring 2020: INFO202 - Data Curation</li>
        <li class="drexel">Fall 2019: INFO600 - Web Systems &amp; Architecture</li>
        <li class="oduphd">Spring 2015: <a href="https://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/">CS418 - Web Programming</a></li>
      </ul>
    </section>

    <section id="courseworkHistory" class="hide">
      <h2>Coursework History</h2>
      <ul>
        <li class="oduphd">Spring 2019
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2018
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2018
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2018
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2017
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2017
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2017
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2016
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2016
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2016
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2015
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2015
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2015
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2014
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2014
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2014
          <ul>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
          </ul>
        </li>
        <li class="oduphd">Fall 2013
          <ul>
            <li>CS595 - <a href="http://www.cs.odu.edu/~mln/teaching/cs595-f13/">Introduction to Web Science</a> (<a href="https://www.cs.odu.edu/~mln/">Dr. Michael L. Nelson</a>)</li>
            <li>CS899 - Doctoral Dissertation (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
            <li>CS690 - Colloquium</li>
          </ul>
        </li>
        <li class="oduphd">Summer 2013
          <ul>
            <li>CS891 - Graduate Seminar (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
            <li>CS690 - Colloquium</li>
          </ul>
        </li>
        <li class="oduphd">Spring 2013
          <ul>
            <li>CS895 - <a href="http://www.cs.odu.edu/~mweigle/CS795-S13/Home">Applied Visual Analytics</a> (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)
              <ul>
                <li>Project: You're Gonna Die: Diet Edition (<a href="http://www.cs.odu.edu/~mkelly/semester/2013_spring/project1/finalReport.pdf">report</a>, <a href="http://www.cs.odu.edu/~mkelly/semester/2013_spring/project1/">visualization</a>)</li>
                <li>Project: Box Office Movie Rating and Take Prediction (<a href="http://www.cs.odu.edu/~mkelly/semester/2013_spring/project2/CS895S13P2_FinalReport_Kelly.pdf">report</a>, <a href="http://www.cs.odu.edu/~mkelly/semester/2013_spring/project2/">visualization</a>)</li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="oduphd">Fall 2012
          <ul>
            <li>CS895 - <a href="http://www.cs.odu.edu/~mweigle/CS795-F12/Home">Information Visualization</a> (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)
              <ul>
                <li>Project: <a href="http://www.cs.odu.edu/~mkelly/cs795f12/final/finalReport.pdf">BibT<sub class="texE">e</sub>X Corpus Visualizer</a></li>
              </ul>
            </li>
            <li>CS895 - <a href="http://www.cs.odu.edu/~olariu/cs795-f-2012.html">Topics: Adventures in Sensor Networks</a> (<a href="http://www.cs.odu.edu/~olariu/">Dr. Stephan Olariu</a>)<ul>
                <li><a href="http://www.cs.odu.edu/~mkelly/semester/2012_fall/cs895SensorNetworks/CS895_midTermPresentation_matKelly.pdf">Presentation</a> of <a href="http://ieeexplore.ieee.org/document/5585658/?arnumber=5585658">a recent paper on sensor networks</a></li>
                <li>Project/Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2012_fall/cs895SensorNetworks/CS895_projectPresentation_matKelly.pdf">Runtime Reprogramming on TinyOS Sans Deluge Modifications</a></li>
            </ul></li>
        </ul></li>
    <li class="odu">Summer 2012<ul>
            <li>CS891 - Graduate Seminar (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
        </ul>
        <li class="odu">Spring 2012<ul>
            <li>CS896 - Topics in Computer Science (<a href="http://www.cs.odu.edu/~mln/">Dr. Michael L. Nelson</a>)</li>
            <li>CS699 - Thesis Research (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a> &amp; <a href="http://www.cs.odu.edu/~mln/">Dr. Michael L. Nelson</a>)<ul>
                <li>Defense Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2012_summer/thesis_presentation.pptx">An Extensible Framework for Creating Personal Web Archives of Content Behind Authentication</a></li>
                <li>Thesis: <a href="http://www.cs.odu.edu/~mweigle/papers/kelly-thesis-12.pdf">An Extensible Framework for Creating Personal Archives of Web Resources Requiring Authentication</a></li></ul>
            </li>
        </ul>
    </li>
    <li class="odu">Fall 2011<ul>
            <li>CS895 - <a href="http://www.cs.odu.edu/~olariu/cs795-895-sm.html">Topics: Stochastic Modeling Performance Evaluation</a> (<a href="http://www.cs.odu.edu/~olariu/">Dr. Stephan Olariu</a>)<ul>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_stochasticModeling_midtermPresentation.pdf">Midterm Presentation on a chosen Stochastic Modeling Problem</a></li>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_stochasticModeling_finalPresentation.pdf">Stochastic Modeling Paper</a></li>
            </ul></li>
            <li>CS895 - <a href="https://www.cs.odu.edu/~mln/teaching/cs895-f11/">Topics: Web-based Information Retrieval</a> (<a href="http://www.cs.odu.edu/~mln/">Dr. Michael L. Nelson</a>)<ul>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_informationRetrieval_presentation1.pptx">Evaluation and Relation</a> of a <a href="https://quod.lib.umich.edu/j/jep/3336451.0007.104?view=text;rgn=main" title="The Deep Web: Surfacing Hidden Value by Michael K. Bergman">Seminal Paper</a> and a <a href="http://web.eecs.umich.edu/~michjc/papers/cafarella-webscale-sigmodrecord08.pdf" title="Web-Scale Extraction of Structured Data by Michael J. Cafarella, Jayant Madhavan &amp; Alon Halevy">Followup Paper</a></li>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_informationRetrieval_presentation2.pptx">Evaluation and Relation</a> of a <a href="http://www.aclweb.org/anthology/A88-1019.pdf" title="A Stochastic Parts Program and Noun Phrase Parser for Unrestricted Text by Kenneth Ward Church">Seminal Paper</a> and a <a href="http://www.aclweb.org/anthology/E93-1046" title="Ambiguity Resolution In A Reductionist Parser by Atro Voutilainen &amp; Pasi Tapanainen">Followup Paper</a></li>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_informationRetrieval_presentation3.pptx">Evaluation and Relation</a> of a <a href="http://ieeexplore.ieee.org/xpl/freeabs_all.jsp?arnumber=5392672&amp;abstractAccess=no&amp;userType=inst" title="The Automatic Creation of Literature Abstracts by H. P. Luhn">Seminal Paper</a> and a <a href="http://dl.acm.org/citation.cfm?id=215333" title="A Trainable Document Summarizer by Julian Kupiec, Jan Pedersen &amp; Francine Chen">Followup Paper</a></li>
                <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/semester/2011_fall/cs895_informationRetrieval_presentation4.pptx">Evaluation and Relation</a> of a <a href="http://www.aaai.org/ojs/index.php/aimagazine/article/download/1294/1195" title="Question Answering from Frequently Asked Question Files by Robin D. Burke, Kristian J Hammond, Valdimir Kulyukin, Steven L. Lytinen, Noriko Tomurom &amp; Scott Schoenberg">Seminal Paper</a> and a <a href="https://dl.acm.org/citation.cfm?id=1099572" title="Finding Similar Questions in large Question and Answer Archives by Jiwoon Jeon, W. Bruce Croft and Joon Ho Lee">Followup Paper</a></li>
            </ul></li>
            <li>CS699 - Thesis Research (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)</li>
            <li>CS690 - Colloquium</li></ul>
        </li>
        <li class="odu">Summer 2011<ul>
            <li>CS697 - Independent Study In CS (<a href="http://www.cs.odu.edu/~mweigle/">Dr. Michele C. Weigle</a>)<ul>
                <li><a href="http://www.cs.odu.edu/~mkelly/semester/2011_summer/independent_study_report.pdf">Report on work done</a></li>
                <li>Project: <a href="https://web.archive.org/web/20110831021613/http://hcil.cs.umd.edu/localphp/hcil/vast11/">IEEE VAST Challenge</a> 2011 (<a href="http://matkelly.com/projects/VAST2011/">submission</a>) (<a href="http://www.cs.odu.edu/~mkelly/semester/2011_summer/submission_review_vast.txt">results</a>)</li>
                <li>Investigation of <a href="http://docs.tinyos.net/index.php/Deluge_T2">Deluge T2</a> on <a href="https://github.com/tinyos/tinyos-main">TinyOS</a>-based motes for project in Fall 2011</li>
                <li>Validation of <a href="http://www.cs.odu.edu/~mweigle/papers/tmix-nsdoc.pdf">Tmix</a> for ns-2 and porting of delaybox for <a href="http://www.nsnam.org/">ns-3</a></li>
                <li>Initial investigation of <a href="https://en.wikipedia.org/wiki/Universal_Software_Radio_Peripheral">USRP</a>s for <a href="http://www.cs.odu.edu/~nadeem/">Dr. Tamer Nadeem</a>. Ongoing into Fall 2011.</li>
                <li>Further programming of <a href="https://github.com/machawk1/archivefacebook">Archive Facebook</a> for <a href="http://www.cs.odu.edu/~mln/">Dr. Michael L. Nelson</a>/<a href="http://ws-dl.blogspot.com">Web Science and Digital Libraries Research Group</a>.<ul>
                  <li>Presentation: <a href="http://www.cs.odu.edu/~mkelly/archivefb/presentation.pptx">Archive Facebook</a> at NDIIPP/NDSA Partner Meetup in Washington, DC (<a href="http://ws-dl.blogspot.com/2011/07/2011-07-25-ndsandiipp-partner-meetup.html">blog post</a>)</li></ul>
                </li></ul>
            </li>
    </ul></li>
    <li class="odu">Spring 2011<ul>
            <li>CS665 - <a href="http://www.cs.odu.edu/~olariu/cs665.html">Computer Architecture</a> (<a href="http://www.cs.odu.edu/~olariu/">Dr. Stephan Olariu</a>)<ul>
                <li><a href="https://github.com/machawk1/scoreboarding">Project: An illustration of Scoreboarding dynamics</a></li></ul>
            </li>
            <li>CS695 - <!--<a href="http://www.cs.odu.edu/~yaohang/cs695/">-->Topics: Monte Carlo Simulation<!--</a>--> (<a href="http://www.cs.odu.edu/~yaohang/">Dr. Yaohang Li</a>)<ul>
            <li><a href="http://www.cs.odu.edu/~mkelly/semester/2011_spring/cs695_montecarlosimulation_20110426_paper.docx">Paper</a>/<a href="http://www.cs.odu.edu/~mkelly/semester/2011_spring/cs695_montecarlosimulation_20110412_presentation.pptx">Presentation</a>: Simulated Annealing and N Generals as applied to a Synchronized Distributed Operation</li></ul>
            </li>
        </ul></li>
    <li class="odu">Fall 2010
      <ul>
        <li>CS600 - Algorithms and Data Structures (Dr. Desh Ranjan)</li>
        <li>CS795 - Topics: Machine Learning (<a href="http://www.cs.odu.edu/~zeil/">Dr. Steven J. Zeil</a>)
          <ul>
            <li>Paper/Presentation: A Subjectivity Free Analysis and Predictive Scheme for Ranking College Football Teams Using Perceptrons</li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="citadel">Spring 2009
      <ul>
        <li>CSCI603 - Object-Oriented Design Patterns (Dr. Christopher W. Starr)
          <ul>
            <li>Project: Object-Oriented Design Patterns in OCaml</li>
          </ul>
        </li>
        <li>CSCI618 - <!--<a href="http://macs.citadel.edu/rudolphg/csci618/091/index.html">-->Programming Languages<!--</a>-->  (<a href="http://www.mathcs.citadel.edu/rudolphg/">Dr. George Rudolph</a>)<ul>
                <li>Project: <a href="http://csci618.matkelly.com/">An Exploration of OCaml</a></li></ul>
            </li>
        </ul></li>
    <li class="citadel">Fall 2008<ul>
            <li>CSCI602 - Foundations of Software Engineering (<a href="http://www.mathcs.citadel.edu/rudolphg/">Dr. George Rudolph</a>)<ul>
                <li>Projects: Extensive Documentation for the open source <a href="http://spaz.ca/cronometer/">CRON-O-Meter</a> Project</li></ul>
            </li>
            <li>CSCI601 - Data Modeling and Database Design (<a href="http://www.cs.cofc.edu/~bowring/">Dr. Jim Bowring</a>)</li>
        </ul></li>
    <li class="citadel">Spring 2008<ul>
            <li>CSCI616 - Automata (<a href="http://www.cs.cofc.edu/~mccauley/">Dr. Ren&eacute;e McCauley</a>)</li>
        </ul></li>
        <li class="uf">Spring 2006<ul>
            <li>EEL4744C - Microprocessor Applications (<a href="https://www.ece.ufl.edu/users/gugel-karl">Dr. Karl Gugel</a>)</li>
        </ul></li>
    <li class="uf">Fall 2005<ul>
            <li>CAP4800 - Systems Simulation (<a href="https://atec.utdallas.edu/content/fishwick-paul/">Dr. Paul Fishwick</a>)<ul>
                <li>Project: Deadlocked Philosophers, a simulation illustrating the Dining Philosophers and Resource Deadlock ideas</li></ul>
            </li>
            <li>CIS4914 - Senior Project (<a href="https://www.cise.ufl.edu/~mssz/">Dr. Mark S. Schmalz</a>, <a href="https://www.cise.ufl.edu/~dts/">Dave Small</a>)<ul>
                <li>Project: “<a href="https://sourceforge.net/projects/ufseniorproject/">Project: Bob</a>” - a team-based rapidly developed networked 3-D turn-based strategy game.</li></ul>
            </li>
            <li>COT4501 - Numerical Analysis - A Computational Approach (<a href="http://www.math.ufl.edu/~rs/">Dr. Rick L. Smith</a>)</li>
        </ul></li>
    <li class="uf">Summer 2005<ul>
            <li>GEO1010 - Geography for a Changing World</li>
            <li>CEN4500C - Computer Networking Fundamentals (<a href="https://www.cise.ufl.edu/~dts/">Dave Small</a>)</li>
            <li>ENC1102 - Argument and Persuasion</li>
            <li>STA4321 - Introduction to Probability</li>
        </ul></li>
    <li class="uf">Spring 2005<ul>
            <li>CEN3031 - Introduction to Software Engineering (<a href="https://tuba.ece.ufl.edu/">Dr. Tuba Yavuz</a>)</li>
            <li>COP4600 - Operating Systems (Dr. Rob Cubert)</li>
            <li>WIS2040 - Wildlife Issues</li>
        </ul></li>
    <li class="uf">Fall 2004<ul>
            <li>PHY2054 - Physics 2</li>
            <li>MAS3114 - Computational Linear Algebra</li>
        </ul></li>
    <li class="uf">Summer 2004<ul>
            <li>CDA3101 - Introduction to Computer Organization</li>
            <li>COP3530 - Data Structures and Algorithms (<a href="https://www.cise.ufl.edu/~sahni/">Dr. Sartaj K. Sahni</a>)</li>
        </ul></li>
    <li class="uf">Spring 2004<ul>
            <li>EEL3701C - <a href="https://mil.ufl.edu/4744/">Digital Logic and Computer Systems</a> (<a href="https://mil.ufl.edu/ems/">Dr. Eric M. Schwartz</a>)</li>
            <li>PHY4320 - Philosophy of Mind (<a href="http://www.clas.ufl.edu/users/gwitmer/">Dr. D. Gene Witmer</a>)</li>
            <li>SPN1131 - Beginning Spanish 2</li>
        </ul></li>
    <li class="uf">Fall 2003<ul>
            <li>PHI3130 - Symbolic Logic (<a href="https://philosophy.ubc.ca/profile/murat-aydede/">Dr. Murat Aydede</a>)</li>
            <li>SPN1130 - Beginning Spanish 1</li>
        </ul></li>
    <li class="uf">Summer 2003<ul>
            <li>COT3100 - Applied Discrete Structures</li>
            <li>PHY2049L - Physics 2 Lab</li>
        </ul></li>
    <li class="uf">Spring 2003<ul>
            <li>ENC2210 - Technical Writing</li>
            <li>PHI3500 - Metaphysics (<a href="http://www.clas.ufl.edu/users/gwitmer/">Dr. D. Gene Witmer</a>)<ul>
                <li>Paper: Redefenere Universalia - a proposed solution of the identification of universals through correlating the understanding of universals with Flat Landers</li></ul>
            </li>
            <li>PHY2048 - Physics 1</li>
            <li>POS2041 - American Federal Government</li>
        </ul></li>
    <li class="uf">Fall 2002<ul>
            <li>BSC2008 - Biological Sciences: Evolution, Ecology and Behavior</li>
            <li>MAC2312 - Calculus 2</li>
            <li>PHI2630 - Contemporary Moral Issues</li>
    </ul></li>
    <li class="uf">Summer 2002<ul>
            <li>MAC2313 - Calculus 3</li>
            <li>PHY2048L - Physics 1 Lab</li>
    </ul></li>
    <li class="uf">Spring 2002<ul>
            <li>CGS2414 - Computer Programming Using Java (<a href="https://www.cise.ufl.edu/~pjd/">Peter J. Dobbins</a>)</li>
            <li>CIS3020 - Advanced Programming Fundamentals/Intro to CIS</li>
    </ul></li>
    <li class="uf">Fall 2001<ul>
            <li>CHM2045L - Chemistry 1 Lab</li>
            <li>ENC1101 - Expositional and Argumentative Writing</li>
            <li>MAC2311 - Calculus 1</li>
    </ul></li>
    <li>Spring 2001<ul>
            <li>CHM2030 - Introduction to College Chemistry 1</li>
            <li>CHM2030L - Introduction to College Chemistry 1 Lab</li>
    </ul></li>
    </ul>

    <h3>Coursework Key</h3>
    <ul>
        <li class="oduphd">Doctor of Philosophy, Computer Science; Old Dominion University, Norfolk, Virginia, August 2019</li>
        <li class="odu">Master of Science, Computer Science; Old Dominion University, Norfolk, Virginia, August 2012</li>
        <li class="citadel">Coursework for Master of Science, Computer Science; The Citadel, Charleston, South Carolina</li>
        <li class="uf">Bachelor of Science, Computer Science; University of Florida, Gainesville, Florida, June 2006</li>
    </ul>
</section>

<section id="projects">
    <h2>Assorted Software Projects</h2>
    <ul>
        <li><a href="https://github.com/oduwsdl/ipwb"><em>InterPlanetary Wayback (ipwb)</em></a> - Integration of WARCs into IPFS for more redundant and persistent web archives.</li>
        <li><a href="https://github.com/thing342/mobilememento"><em>Mobile Mink</em></a> - Android application for aggregating and accessing mobile and desktop mementos.</li>
        <li><a href="https://github.com/machawk1/mink"><em>Mink</em></a> - Chrome extension to integrate the live and archived web using Memento.</li>
        <li><a href="https://github.com/machawk1/tachyon"><em>Tachyon</em></a> - Time travel for the web. Memento browser plugin for Google Chrome.</li>
        <li><a href="https://matkelly.com/wail"><em>Web Archiving Integration Layer (WAIL)</em></a> - One-Click User Instigated Preservation.</li>
        <li><a href="https://matkelly.com/warcreate"><em>WARCreate</em></a> - Google Chrome extension to allow a user to create a Web ARChive (WARC) file from any webpage.</li>
        <li><a href="https://www.cs.odu.edu/~mkelly/reversearchiveit/reverseArchiveIt05102011.crx"><em>Reverse Archive-It</em></a> - Quick prototype to determine the collections to which a webpage has been associated by <a href="https://archive-it.org">Archive-It</a>. (<a href="http://www.cs.odu.edu/~mkelly/reversearchiveit/reverseArchiveItDemo.avi">video demo</a>)</li>
        <li><a href="http://web.archive.org/web/20161105172422/https://addons.mozilla.org/en-US/firefox/addon/archivefacebook/"><em>ArchiveFacebook</em></a> - Mozilla Firefox add-on to allow a user to easily download and save the contents of his/her Facebook profile (development discontinued).</li>
    </ul>
</section>

<section id="contact">
    <h2>Contact</h2>
    <ul>
        <li>mkelly at drexel.edu (E-mail)</li>
        <li><a href="https://twitter.com/machawk1" target="_blank" rel="me external noopener noreferrer">@machawk1</a> (Twitter)</li>
        <li><a href="https://github.com/machawk1" target="_blank" rel="me external noopener noreferrer">@machawk1</a> (GitHub)</li>
        <li><a href="https://scholar.google.com/citations?user=ehg7mloAAAAJ" target="_blank" rel="external noopener noreferrer">Mat Kelly @ Google Scholar</a></li>
        <li><a href="https://matkelly.com/orcid" target="_blank" rel="external noopener noreferrer">orcid:0000-0002-0236-7389</a></li>
        <li>ResearcherID: <a href="https://publons.com/researcher/1803741/mat-kelly/"  target="_blank" rel="external noopener noreferrer">A-3809-2019</a></li>
        <li><a href="https://www.semanticscholar.org/author/Mat-Kelly/33277833?q=&sort=influence"  target="_blank" rel="external noopener noreferrer">Mat Kelly @ Semantic Scholar</a></li>
        <li><a href="https://academic.microsoft.com/profile/15627813-12j0-4h91-8fh2-18h013ee767f/machawk1/publication/search?q=Mat%20Kelly&qe=%2540%2540%2540USER.PUBLICATIONS%253D15627813-12f0-4d91-8bd2-18d013aa767b&f=&orderBy=0"  target="_blank" rel="external noopener noreferrer">Mat Kelly @ Microsoft Academic</a></li>
        <li><a href="https://dblp.uni-trier.de/pers/hd/k/Kelly:Mat"  target="_blank" rel="external noopener noreferrer">Mat Kelly @ DBLP</a></li>        
    </ul>
</section>

</body>
</html>

