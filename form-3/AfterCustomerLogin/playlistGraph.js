function createGraph(dt){

window.alert("ab");
window.alert(dt);

var NoOfSongs = [];
var Genre = [];

for (var i=0; i < dt.length; i++)
	{
	NoOfSongs.push(dt[i]);
	}

window.alert("NoOfSongs");
window.alert(NoOfSongs);

var chart = c3.generate({ 
	bindto: '#chart',
	data: { 
		columns: [ 
			NoOfSongs 
		] 
	}, 
	axis: { 
	x: { 
		type: 'category', 
		categories: ['Rock','Pop','Jazz','Funk','Hiphop'] 
	} 
	} 
}); 
}

createGraph(dt);
