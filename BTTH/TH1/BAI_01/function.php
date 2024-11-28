<?php
define('DATA_FILE', 'data.json');

function getFlowers() {
    if (file_exists(DATA_FILE)) {
        $json = file_get_contents(DATA_FILE);
        return json_decode($json, true) ?: [];
    }
    return [];
}
function getFlowerById($id) {
    $flowers = getFlowers(); 
    foreach ($flowers as $flower) {
        if ($flower['id'] == $id) {
            return $flower;
        }
    }
    return null; 
}

function saveFlowers($flowers) {
    file_put_contents(DATA_FILE, json_encode($flowers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}


function addFlower($name, $description, $image) {
    $flowers = getFlowers();
    
    $newId = count($flowers) > 0 ? max(array_column($flowers, 'id')) + 1 : 1;
    $flowers[] = [
        'id' => $newId,
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];
    saveFlowers($flowers);
}

function updateFlower($id, $newName, $newDescription, $newImage) {
    $flowers = getFlowers();
    foreach ($flowers as $key => $flower) {
        if ($flower['id'] == $id) {
            $flowers[$key] = [
                'id' => $id, 
                'name' => $newName,
                'description' => $newDescription,
                'image' => $newImage ?: $flower['image'] 
            ];
            saveFlowers($flowers);
            return true;
        }
    }
    return false;

}


function deleteFlower($id) {
    $flowers = getFlowers();
    foreach ($flowers as $key => $flower) {
        if (isset($flower['id']) && $flower['id'] == $id) {
            unset($flowers[$key]);
            saveFlowers(array_values($flowers)); 
            return true;
        }
    }
    return false;
}
?>
