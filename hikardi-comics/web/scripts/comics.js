let currentPage = 10

const run = () => {
	const { comics: newComics, pages } = getComics('')
	renderComics(newComics)
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

	comics.forEach(comic => {
		container.insertAdjacentHTML(
			'beforeend',
			getComicCard(comic)
		)
	})
}

const getComics = name => {
	// const response = await fetch(`api/comics?search=${name}`)
	// const data = await response.json()
	data = {
		pages: 21,
		comics: [
			{
				name: 'El eternauta (english)',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			},
			{
				name: 'Esta moralmente mal levantarse minitas en un calabozo?',
				slug: 'el-eternauta-(english)',
				images: [
					'https://www.androidpure.com/wp-content/uploads/2014/12/Xiaomi-Mi-Logo-e1418320898263.png',
					'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg',
					'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
				]
			}
		]
	}
	return data
}

const searchBox = document.querySelector('#search-input')

searchBox.addEventListener('input', (e) => {
	const name = e.target.value
	const { comics: newComics } = getComics(name)

	renderComics(newComics)
})

run()
