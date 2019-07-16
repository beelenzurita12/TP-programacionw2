function getProducts(){
    let busqueda = '';
    let path = window.location.origin + "/" + window.location.pathname.split("/")[1]

    var data = [
        ['Vehiculos', 200],
        ['Inmobiliaria', 100],
        ['Hogar', 60],
        ['Moda/belleza', 73],
        ['Niños/bebes', 121],
        ['Electronica', 13], 
        ['Ocio/Deportes',152],
        ['Mascotas', 139],
        ['Trabajo/formacion', 190],
        ['Servicios', 50],
        ['Otros', 33]
    ];

    let resultado = fetch(`${path}/resultados_de_busqueda/buscar`, {
        method: "post",
        data: JSON.stringify({
            busqueda
        })
    }).then(response => data)

    return data;    
}

anychart.onDocumentLoad(function() {

    // GRAPHIC 1 //
    var data = getProducts();
    var chart = anychart.column(data);
    chart.yScale()
    .maximum(200);  
    chart.title("Productos publicados por categoría");
    chart.container("container-graphic").draw();

    // GRAPHIC 2 //
    var chart2 = anychart.pie([
        ["Vehiculos", 200],
        ['Trabajo/formacion', 190],
        ['Ocio/Deportes',152],
        ['Mascotas', 139],
        ['Niños/bebes', 121]
    ]);
    chart2.title("Top 5 productos más vendidos");
    chart2.container("container-graphic2").draw();

    // GRAPHIC 3 //
    var chart3 = anychart.column([
        {x: "Ene", value :200},
        {x: 'Feb', value :100},
        {x: 'Mar', value :450},
        {x: 'Abr', value :194},
        {x: 'May', value :57},
        {x: 'Jun', value :526, marker: {enabled: true, type: "star5", fill: "Gold"}},
        {x: 'Jul', value :378},
        {x: 'Ago', value :211},
        {x: 'Sep', value :254},
        {x: 'Oct', value :289},
        {x: 'Nov', value :300},
        {x: 'Dic', value :500}
    ]);
    chart3.title("Ventas por mes en el ultimo año");
    chart3.container("container-graphic3").draw();
});