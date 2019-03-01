<?php

/**
 * @param string $path
 * @return string
 */
function baseUrl($path = null)
{
    return rtrim(BASE_URL, '/') . ($path ? '/' . ltrim($path, '/') : '');
}


/**
 * @param string $template
 * @param array  $data
 * @return string
 */
function template($template, array $data = [])
{
    // Initialisation des variables
    foreach($data as $name => $value)
    {
        ${$name} = $value;
    }

    include($template);
}


/** 
 * Retourne un objet avec les données d'un projet.
 * @param string $projectName
 * @return Object
 */
function getProjectData(&$projectName)
{
    $filePath = __DIR__ . '/data/projects/' . $projectName . '.json';
    
    if(!file_exists($filePath))
    {
        return false;
    }
    else
    {
        // Chargement fichier JSON
        $jsonData = file_get_contents($filePath);

        if(!$jsonData) {
            return false;
        }
    }

    $projectData = json_decode($jsonData);

    if(is_null($projectData))
    {
        return false;
    }
    else // NOUVEAU : on crée un attribut slug pour les URL des portfolio
    {
        $projectData->slug = strtolower(preg_replace('/^((\d+)-)/', '', $projectName));
    }

    return $projectData;
}


/**
 * Retourne le nom complet d'un fichier JSON projet associé au slug en paramètre.
 * @param string $slug
 * @return null|string Nom du fichier JSON ou null si introuvable.
 */
function getJsonFilenameFromSlug($slug)
{
    $folder = __DIR__ . '/data/projects';
    $files = scandir($folder, SCANDIR_SORT_NONE);

    if($files) {
        foreach ($files as $fileName) {
            if(stripos($fileName, $slug) !== false)
            {
                return substr($fileName, 0, -5);
            }
        }
    }

    return null;
}