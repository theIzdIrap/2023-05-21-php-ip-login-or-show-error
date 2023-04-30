//bunlar da izin verilen ipler

$allowlist = array(
'00.000.00.00',
'00.000.00.00',
'00.000.00.00',
'00.000.00.00',
'00.000.00.00',
);

//siteye istek atan ip eğer allowed list (white list)te yoksa die içerisindeki mesajı gösterir

if(!in_array($_SERVER['REMOTE_ADDR'],$allowlist)){
die('Üzgünüz bu site kısa süre önce blabla.gov tarafından kapatıldı.');
}
