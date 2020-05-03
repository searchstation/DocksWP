<?php
function docks_allowed_block_types( $allowed_block_types, $post ) {

        return array(
          //'core/archives',
          //'core/audio',
          'core/button',
          //'core/categories',
          'core/code',
          'core/column',
          'core/columns',
          //'core/coverImage',
          'core/embed',
          'core/file',
          //'core/freeform',
          'core/gallery',
          'core/heading',
          'core/html',
          'core/image',
          //'core/latestComments',
          //'core/latestPosts',
          'core/list',
          //'core/more',
          'core/nextpage',
          'core/paragraph',
          'core/preformatted',
          'core/pullquote',
          'core/quote',
          'core/reusableBlock',
          'core/separator',
          'core/shortcode',
          'core/spacer',
          'core/subhead',
          'core/table',
          'core/textColumns'
          //'core/verse',
          //'core/video'
        );

    return $allowed_block_types;

  }


add_filter( 'allowed_block_types', 'docks_allowed_block_types', 10, 2 );
