<?php return array (
  'log1x/acf-composer' => 
  array (
    'providers' => 
    array (
      0 => 'Log1x\\AcfComposer\\Providers\\AcfComposerServiceProvider',
    ),
  ),
  'log1x/sage-directives' => 
  array (
    'providers' => 
    array (
      0 => 'Log1x\\SageDirectives\\SageDirectivesServiceProvider',
    ),
  ),
  'log1x/sage-svg' => 
  array (
    'aliases' => 
    array (
      'SageSvg' => 'Log1x\\SageSvg\\Facades\\SageSvg',
    ),
    'providers' => 
    array (
      0 => 'Log1x\\SageSvg\\SageSvgServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
);