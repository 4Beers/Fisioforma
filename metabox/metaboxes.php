<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

$prefix = 'fisio';

global $meta_boxes;

$meta_boxes = array();

/* Home - 1o. campo */

$meta_boxes[] = array(
    'title'    => 'Banners <style>.rwmb-add-file {display: none}</style>',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-banners',
    'fields' => array(
        array(
            'name' => 'Banner 1',
            'id'   => "{$prefix}homebanner-img01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 2',
            'id'   => "{$prefix}homebanner-img02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 3',
            'id'   => "{$prefix}homebanner-img03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 4',
            'id'   => "{$prefix}homebanner-img04",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 5',
            'id'   => "{$prefix}homebanner-img05",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 6',
            'id'   => "{$prefix}homebanner-img06",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}homebanner-link06",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);

$meta_boxes[] = array(
    'title'    => 'Primeiro Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-primeiro-campo',
    'fields' => array(
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto01",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto02",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto03",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link03",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);

$meta_boxes[] = array(
    'title'    => 'Segundo Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-segundo-campo',
    'fields' => array(
        array(
            'name' => 'Incorporar Vídeo',
            'id'   => "{$prefix}home02block-video",
            'type' => 'oembed',
        ),
    )
);

$meta_boxes[] = array(
    'title'    => 'Terceiro Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-terceiro-campo',
    'fields' => array(
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto01",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto02",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto03",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link03",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);


/* Tratamentos */

$meta_boxes[] = array(
	'id' => 'tratamentos-options',
	'title' => __( 'Fotos do Tratamento', 'rwmb' ),
	'pages' => array( 'tratamentos' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Fotos', 'rwmb' ),
			'id'   => "{$prefix}fotos",
			'type' => 'plupload_image',
			'std'  => '',
            'max_file_uploads' => 50,
		),
    
	),
);

/* Unidades */

$meta_boxes[] = array(
	'id' => 'unidades-options',
	'title' => __( 'Detalhes da Unidade', 'rwmb' ),
	'pages' => array( 'unidades' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Endereço', 'rwmb' ),
			'id'   => "{$prefix}unidade-end",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'CEP', 'rwmb' ),
			'id'   => "{$prefix}unidade-cep",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Telefone', 'rwmb' ),
			'id'   => "{$prefix}unidade-tel",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Google Maps', 'rwmb' ),
			'id'   => "{$prefix}unidade-loc",
			'type' => 'map',
			'std'  => '',
		),
	),
);

/* Depoimentos */

$meta_boxes[] = array(
	'id' => 'depoimentos_options',
	'title' => __( 'Opções de Depoimentos', 'rwmb' ),
	'pages' => array( 'depoimentos' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'ID do Vídeo', 'rwmb' ),
			'id'   => "{$prefix}id-depoimento",
			'type' => 'text',
			'std'  => '',
      'desc' => '<br />Ex: https://www.youtube.com/watch?v=<b>BJ78bwKOUs4</b><br />A imagem do vídeo será gerada automaticamente.',
		),
	),
);

/* Franquias */

$meta_boxes[] = array(
    'title'    => 'Textos',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-franquias.php' ),
    ),
    'id'       => 'pagina-textos',
    'fields' => array(
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #1',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo01",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto01",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #2',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo02",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto02",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #3',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo03",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto03",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #4',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo04",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto04",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #5',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo05",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto05",
            'type' => 'wysiwyg',
        ),
    )
);

/* Contato */

$meta_boxes[] = array(
    'title'    => 'Textos',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-contato.php' ),
    ),
    'id'       => 'pagina-contato',
    'fields' => array(
        array(
            'name' => 'Título',
            'id'   => "{$prefix}contato-titulo",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}contato-texto",
            'type' => 'textarea',
        ),
    )
);

/* Produtos */

$meta_boxes[] = array(
	'id' => 'produtos_options',
	'title' => __( 'Descrição do Produto', 'rwmb' ),
	'pages' => array( 'loja' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Nome', 'rwmb' ),
			'id'   => "{$prefix}prod-nome",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Descrição', 'rwmb' ),
			'id'   => "{$prefix}prod-descr",
			'type' => 'wysiwyg',
			'std'  => '',
		),
    array(
        'type' => 'heading',
        'name' => 'Preço',
    ),
		array(
			'name' => __( 'De (R$)', 'rwmb' ),
			'id'   => "{$prefix}prod-preco-de",
			'type' => 'text',
			'std'  => '',
      'columns' => 3,
		),
		array(
			'name' => __( 'Por (R$)', 'rwmb' ),
			'id'   => "{$prefix}prod-preco-por",
			'type' => 'text',
			'std'  => '',
      'columns' => 3,
		),
		array(
			'name' => __( 'Produto em Promoção', 'rwmb' ),
			'id'   => "{$prefix}prod-promo",
			'type' => 'checkbox',
      'std'  => 0,
      'columns' => 3,
		),
		array(
			'name' => __( 'Desconto (%)', 'rwmb' ),
			'id'   => "{$prefix}prod-descont",
			'type' => 'text',
      'std'  => '',
      'columns' => 3,
		),
	)
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );