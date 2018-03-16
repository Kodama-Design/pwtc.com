<?php
/**
 * Template Name: Two Columns
 *
 */
require_once __DIR__.'/includes/bootstrap.php';

// get services
/** @var \Symfony\Component\DependencyInjection\Container $container */
/** @var Twig_Environment $twig */
$twig = $container->get("twig.environment");

// preg global twig data
$data = require_once __DIR__ . '/includes/bootstrap-theme.php';

// render
echo $twig->render('two-column.html.twig', $data);
