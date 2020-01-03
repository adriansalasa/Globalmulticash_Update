$('.Eng').click(function(){  
        $('.Ind').show();               
        $('.Ind').addClass('selShow')
        $('#hidTranslate').val(0);
      });

$('.Ind').click(function(){     
        $('.Eng').remove();   
        $('.Ind').addClass('Eng')
        $('.Ind').removeClass('Ind') 
        $('.Ind').removeClass('selShow');                        
        translateToIndo(); 
        // $('#hidTranslate').val(1);     
                     

               
   
        // if(tmphidTranslate > 0 && tmphidTranslate < 2){
        //     // tmphidTranslate = parseInt(tmphidTranslate) + 1            
        //   // $('.Ind').addClass('Eng');
        //   //   $('.Ind').removeClass('selShow')  
        //   $('.selLang').append('<li#Eng2><a href="#">EN</a></li> ');
        //   // $('.Eng2').addClass('Eng2');
        // }
        // $('.selLang').append('<li.Eng><a href="#">EN</a></li> ');
        // $('.Eng').addClass('.Eng2')
        testYa();

      });
function testYa(){
    $('#hidTranslate').val(1);     
    let tmphidTranslate =  $('#hidTranslate').val();  
    // tmphidTranslate = parseInt(tmphidTranslate) + 1 
    alert("test ya : "+tmphidTranslate);
    
    if(parseInt(tmphidTranslate) == 2){
    }
}
       
function translateToIndo(){
    // Translate Navbar
        $('#hm').html("Halaman Utama")
        $('#svc').html("Layanan Kami")
        $('#happly').html("Cara Daftar")
        $('#cntUS').html("Hubungi Kami")
        $('#abtUS').html("Tentang kami")

        // Translate SubJudul ke 1
        $('#sTitle').html("Solusi Masalah Keuangan anda")
        $('#psTitle').html("Kami dapat membantu masalah keuangan anda dengan memberikan penawaran pinjaman cepat dengan bunga rendah. Kami menawarkan pinjaman mulai dari Rp. 500.000 - Rp. 60.000.000.")

        // Translate SubJudul Our Services
        $('#sHOS').html("Layanan Kami")
        $('#pOSH2').html("Kami memberi anda kemudahan akses pinjaman dengan bunga yang rendah")

        $('#sHSecure').html("Keamanan Tingkat Tinggi")
        $('#pHSecure').html("Dengan menggunakan teknologi Enkripsi tingkat tinggi kami akan melidungi data pribadi anda dan tidak akan menyebarkannya kepada siapapun.")

        $('#sH24CS').html("Layanan Informasi 24 Jam")
        $('#pH24CS').html("Kami menyediakan layanan informasi yang handal selama 24 jam. Jika ada keluhan atau ada ingin ditanyakan jangan ragu untuk hubungi kami.")

        $('#sHFE').html("Cepat dan Mudah")        
        $('#pHFE').html("Layanan yang cepat dan Proses Approve yang cepat. Anda bisa dapatkan total uang sebesar Rp. 60.000.000 dalam 1 jam")

        $('#sHLowIn').html("Tingkat Bunga Rendah")
        $('#pHLowIn').html("Kami menawarkan anda pinjaman dengan bunga rendah mulai dari 0.05%. Jangka waktu peminjaman bervariasi mulai dari 3-5 Tahun dan pengembalian pinjaman bisa dicicil per Minggu, per dua minggu, atau per bulan")

        $('#sHHapp').html("Bagaimana cara pendaftarannya")
        $('#pSHapp').html("Langkah sederhana untuk mendaftar")

        $('#pHFReg').html("Isi form")
        $('#pHWav').html("Tunggu konfirmasi")
        $('#pHGL').html("Pinjaman cair")

        // $('#pBtnApply').html("Daftar Sekarang")        

        // Translate SubJudul Contact US
        $('#HConUS').html("Hubungi Kami")        
        $('#lblUsrNm').html("Nama Pengguna")
        $('#txtUsrName').attr("placeholder", "Masukan Nama Anda...")
        $('#lblEmail').html("Alamat Email")
        $('#txtsEmail').attr("placeholder", "Masukan alamat Email Anda...")
        $('#lblPhone').html("Nomor Telpon")
        $('#txtsTelp').attr("placeholder", "Masukan nomor Telpon Anda...")
        $('#lblMessage').html("Tulis Pesan")
        $('#txtsmsg').attr("placeholder", "Tulis pesan yang akan anda sampaikan...") 
        $('#btn_post_Verify').html("Kirim")   
        $('#btnReset').html("Batalkan")

        // Translate SubJudul About US
        $('#HAbout').html("Tentang Kami")
        $('#pHAbout').html("Global Multicash adalah platform berbasis technology informasi yang dijalankan oleh Sembilan Bola Dunia yang mengedepankan perlindungan konsumen dan memiliki risiko yang terkelola dengan baik")
}