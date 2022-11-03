const api_url = 'https://imdb-api.com/en/API/Top250Movies/k_c4586ape';
async function getPoster() {
	const response = await fetch(api_url);
	const data = await response.json();
	const{ items } = data;
	

	document.getElementById('img0').src = items[0].image;
	document.getElementById('title0').textContent = items[0].title;

	document.getElementById('img1').src = items[1].image;
	document.getElementById('title1').textContent = items[1].title;

	document.getElementById('img2').src = items[2].image;
	document.getElementById('title2').textContent = items[2].title;

	document.getElementById('img3').src = items[3].image;
	document.getElementById('title3').textContent = items[3].title;

	document.getElementById('img4').src = items[4].image;
	document.getElementById('title4').textContent = items[4].title;

	document.getElementById('img5').src = items[5].image;
	document.getElementById('title5').textContent = items[5].title;

	document.getElementById('img6').src = items[6].image;
	document.getElementById('title6').textContent = items[6].title;

	document.getElementById('img7').src = items[7].image;
	document.getElementById('title7').textContent = items[7].title;

	document.getElementById('img8').src = items[8].image;
	document.getElementById('title8').textContent = items[8].title;

	document.getElementById('img9').src = items[9].image;
	document.getElementById('title9').textContent = items[9].title;
	
	
	
}

getPoster();


/*fetch(api_url).then((data)=>{
	return data.json();
}).then((completedata)=>{
	let data1 = "";
	let data2 = "";
	completedata.items.map((values)=>{
		data1 = `  <div class = "img container">
        <h1>${values.title}</h1>
    </div>
    <img src =${values.image} id="img" img class="images">
    `
	});
	document.getElementById("movies").innerHTML = data1;
})

*/