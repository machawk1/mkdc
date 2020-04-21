function screenshotTest () {
	html2canvas(document.body, {
	  allowTaint: true,
	  onrendered: function(canvas) {
		  if (!document.getElementById('screenshot')) { // Exec below only once
			canvas.id = 'screenshot'

			var tf = document.createElement('div')
			tf.id = 'thumbnailFrame'

			document.getElementsByTagName('header')[0].insertBefore(tf,document.getElementsByTagName('h1')[0])
			document.getElementById('thumbnailFrame').appendChild(canvas)
		}
	  }
	})
}
function addPPPFilters () {
  // Get children li's as array (default is a Nodelist)
  var ppps = Array.from(document.getElementById('ppp').children)
  
  var filter_all = document.getElementById('ppp_all')
  var filter_pr = document.getElementById('ppp_pr')
  var filter_p = document.getElementById('ppp_p')
  var filter_j = document.getElementById('ppp_j')
  var filter_a = document.getElementById('ppp_a')
			
  filter_pr.onclick = function showOnlyPeerReviewed () {
	  ppp_showOnly('peerReviewed')
	  ppp_highlightNavItem(this.id)
  }
  filter_p.onclick = function showOnlyPapers () {
	  ppp_showOnly('paper')
	  ppp_highlightNavItem(this.id)
  }
  filter_j.onclick = function showOnlyJournal () {
	  ppp_showOnly('journal')
	  ppp_highlightNavItem(this.id)
  }
  filter_a.onclick = function showOnlyAwarded () {
	  ppp_showOnly('award')
	  ppp_highlightNavItem(this.id)
  }
  filter_all.onclick = function showAll () {
	  ppp_showAll()
	  ppp_highlightNavItem(this.id)
  }
}

// Show pubs, pres, etc. only of a certain type className
function ppp_showOnly (className) {
  var ppps = Array.from(document.getElementById('ppp').children)
  ppps.forEach(function changeHidden (el, i, arr) {
	  el.classList.contains(className) ? el.classList.remove('hidden') : el.classList.add('hidden')
  })
  // Add class to parent to re-assign zebra stripes. Won't work until browsers support multiple pseudo-selectors
  // var ppp = document.getElementById('ppp')
  // ppp.classList.replace('unfiltered', 'filtered')
}

function ppp_showAll () {
  var ppps = Array.from(document.getElementById('ppp').children)
  ppps.forEach(function changeHidden (el, i, arr) {
	  el.classList.remove('hidden')
  })
  // Restore zebra stripes to unfiltered. Won't work until browsers support multiple pseudo-selectors
  // var ppp = document.getElementById('ppp')
  // ppp.classList.replace('filtered', 'unfiltered')
}

// Change selection UI style on click
function ppp_highlightNavItem (id) {
  var filterOptions = Array.from(document.getElementById('ppp_filter').children)
  filterOptions.forEach(function selectOption (el, i, arr) {
	el.firstChild.id == id ? el.classList.add('ppp_active') : el.classList.remove('ppp_active')
  })
}
document.addEventListener('DOMContentLoaded', function (event) {
	// Create the cloned header to be displayed when the mobile user has scrolled
	// past a certain vertical threshold. 
  let headerClone = document.getElementsByTagName('header')[0].cloneNode(true)
  headerClone.id = 'clonedHeader'
  headerClone.classList = 'hide'  // Initially hide it.
  document.body.appendChild(headerClone)  // Add it to the DOM.
  
  document.onscroll = function () {
		let header = document.getElementById('clonedHeader')
		if (window.innerWidth <= 600) { // Responsive design, small width viewport
			const offsetTarget = 250  // At what y-value to have cloned header at full opacity
			if (window.pageYOffset > offsetTarget) {
				header.classList.add('pinned')
				header.classList.remove('hide')
				header.style.opacity = Math.min((window.pageYOffset - offsetTarget) / offsetTarget, 1.0)
			} else {
				header.classList.remove('pinned')
				header.classList.add('hide')
				header.style.opacity = 1.0
			}
		} else { // Default to hide the cloned header
			header.classList.add('hide')
		}
	}
	
	addPPPFilters()
})