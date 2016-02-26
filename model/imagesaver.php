<?php
function deleteImage($id, $i)
{
    if (is_file(ROOT . '/img/goodsgallery/' . $id . '/' . $i . '.jpg')) {
        unlink(ROOT . '/img/goodsgallery/' . $id . '/' . $i . '.jpg');
    }
}

function addImage($id, $i)
{
//    $filename = explode('.', $id);
//    $filename = $filename[0] . '.jpg';

    $img = new SimpleImage($_FILES['pattern'.$i]['tmp_name']);
    if (!is_dir (ROOT . '/img/goodsgallery/'.$id)) {
        mkdir(ROOT . '/img/goodsgallery/'.$id, 0777, true);

    }
    $img->best_fit(850, 850)->save(ROOT . '/img/goodsgallery/' . $id . '/' . $i . '.jpg');
}

function clearFolder($directory) {
    if (file_exists($directory))
        foreach (glob($directory.'/*') as $file){unlink($file);}
        if(is_dir($directory))rmdir ($directory);
}




//
//
////blueprint
//function ad11d($x) {
//    $filename = $x . '.jpg';
//    $img = new SimpleImage($_FILES[$x]['tmp_name']);
//    $img->best_fit(500, 300)->save(ROOT . '/files/xl/' . $filename);
//    $img->best_fit(80, 80)->save(ROOT . '/files/xs/' . $filename);
//}
//
//function dele11te($x) {
//    if(is_file(ROOT . '/files/xl/' . $x . '.jpg')){
//        unlink(ROOT . '/files/xl/' . $x . '.jpg');
//    }
//    if(is_file(ROOT . '/files/xs/' . $x . '.jpg')){
//        unlink(ROOT . '/files/xs/' . $x . '.jpg');
//    }
//}
//function addn11ew($x, $y) {
//    $filename = $x . '.jpg';
//    $img = new SimpleImage($_FILES[$y]['tmp_name']);
//    $img->best_fit(640, 480)->save(ROOT . '/files/xl/' . $filename);
//    $img->best_fit(80, 80)->save(ROOT . '/files/xs/' . $filename);
//}
//
//function delet11enew($x) {
//    if (is_file(ROOT . '/files/xl/' . $x . '.jpg')) {
//        unlink(ROOT . '/files/xl/' . $x . '.jpg');
//    }
//    if (is_file(ROOT . '/files/xs/' . $x . '.jpg')) {
//        unlink(ROOT . '/files/xs/' . $x . '.jpg');
//    }
//}
//
//function clear11($directory) {
//    if (file_exists($directory))
//        foreach (glob($directory.'/*') as $file){unlink($file);}
//    rmdir ($directory);
//
//}


