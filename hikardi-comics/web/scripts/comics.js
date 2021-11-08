let currentPage = 1

const run = () => {
	const { comics: newComics, pages } = filterComics('')
	renderComics(newComics)
	renderPaginator(pages)
}

const removeChilds = (container) => {
	while (container.firstChild) {
		container.removeChild(container.firstChild);
	}
}

const handlePaginatorClick = (action, pages) => {
	console.log(action)

	switch (action) {
		case 'back':
			if (currentPage != 1)
				currentPage -= 1
			break
		case 'next':
			if (currentPage < pages)
				currentPage += 1
			break
		default:
			currentPage = action
			break
	}
	
	renderPaginator(pages)
}

const getPaginator = pages => `
	<span class="paginator--text" onclick="handlePaginatorClick('back', ${pages})"><</span>
	${
		currentPage === 1
		? ''
		: `
			<span class="paginator--text" onclick="handlePaginatorClick(1, ${pages})">1</span>
			<span class="paginator--text">...</span>
		`
	}
	<span class="paginator--text paginator--text__current">${currentPage}</span>
	
	${
		currentPage >= pages
		? ''
		: `
			<span class="paginator--text">...</span>
			<span class="paginator--text" onclick="handlePaginatorClick(${pages}, ${pages})">${pages}</span>
		`
	}
	<span class="paginator--text" onclick="handlePaginatorClick('next', ${pages})">></span>
`

const renderPaginator = (pages) => {
	
	const container = document.querySelector('#paginator')
	removeChilds(container)

	container.insertAdjacentHTML(
		'beforeend',
		getPaginator(pages)
	)
}

const getComicCard = comic => `
	<a class="comic-card" href="${comic.slug}">
		<img src=${comic.images[0]} class="comic-card--image" />
		<div class="comic-card--textcontainer">
			<h3 class="comic-card--text">${comic.name}</h3>
		</div>
	</a>
`

const renderComics = comics => {
	console.log('render')
	const container = document.querySelector('#comics-container')
	removeChilds(container)

	comics.slice(0, 8).forEach(comic => {
		container.insertAdjacentHTML(
			'beforeend',
			getComicCard(comic)
		)
	})
}

const filterComics = name => {
	if(!name) return { comics, pages: Math.ceil(comics.length / 8) }
	const filteredComics = comics.filter(x => x.name.includes(name))

	data = {
		pages: Math.ceil(filteredComics.length / 8),
		comics: filteredComics
	}
	return data
}

const searchBox = document.querySelector('#search-input')

searchBox.addEventListener('input', (e) => {
	const name = e.target.value
	const { comics: newComics, pages } = filterComics(name)

	renderComics(newComics)
	renderPaginator(pages)
})

run()
