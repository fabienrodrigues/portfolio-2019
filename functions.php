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

    return $projectData;
}