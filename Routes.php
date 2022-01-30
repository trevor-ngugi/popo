<?php

Route::set('index.php',function(){
    Index::CreateView('Index');
});

Route::set('about-us',function(){
    Aboutus::CreateView('Aboutus');
});

Route::set('contact-us',function(){
    Contactus::CreateView('Contactus');
});

?>