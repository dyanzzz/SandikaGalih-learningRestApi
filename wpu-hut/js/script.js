function tampilkanSemuaMenu(){
  $.getJSON('pizza.json', function(data){
    //console.log(data);
    let menu = data.menu;
    //console.log(menu);
    $.each(menu, function(i, data){
      $('#daftar-menu').append('<div class="col-md-3"><div class="card mb-3"><img src="img/'+data.gambar+'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text text-justify">'+data.deskripsi+'</p><p class="card-text">Rp. '+data.harga+'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
    });

  });
}

tampilkanSemuaMenu();


$(".nav-link").on("click", function(){
  $(".nav-link").removeClass("active");
  $(this).addClass("active");

  let kategori = $(this).html();
  $("h1").html(kategori);

  if(kategori == "All Menu"){
    tampilkanSemuaMenu();
    return;
  }

  $.getJSON('pizza.json', function(data){
    let menu = data.menu;
    let content   = "";
    $.each(menu, function(i, data){
      if(data.kategori == kategori.toLowerCase()){
        content += '<div class="col-md-3"><div class="card mb-3"><img src="img/'+data.gambar+'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text text-justify">'+data.deskripsi+'</p><p class="card-text">Rp. '+data.harga+'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
      }
    });

    $("#daftar-menu").html(content)

  });

});