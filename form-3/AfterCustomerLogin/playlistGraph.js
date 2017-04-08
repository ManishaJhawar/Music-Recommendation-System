function createGraph(dt){

var NoOfSongs = ['NumberOfSongs'];
var Genre = [];

for (var i=0; i < dt.length; i++)
	{
	NoOfSongs.push(dt[i]);
	}

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
