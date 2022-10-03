	if (document.querySelector('.hiddenJson')) {
		const jsonldScript = document.createElement('script');
		jsonldScript.setAttribute('type', 'application/ld+json');

		let name = dataStructure.name;
		console.log(name)
		const structuredData = `{
			"@context": "https://schema.org/",
			"@type": "Recipe",
			"name": "${name}",
			"author": {
				"@type": "Person",
				"name": "Mary Stone"
			},
			"datePublished": "2018-03-10",
			"description": "This coffee cake is awesome and perfect for parties.",
			"prepTime": "PT20M",
			"image": "/cake.jpg"
		}`;

		jsonldScript.textContent = structuredData;
		document.head.appendChild(jsonldScript);
	 }