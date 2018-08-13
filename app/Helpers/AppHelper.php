<?php

function getItemAdminIcons($item,$itemType,$resource)
{
  $icons = '';

  if (isAdmin() || $item->user_id == getUserId()){

    $icons .= "<a title='Editar Registro' class='btn btn-primary btn-mini' href='".url($itemType.'/'.$item->id.'/edit')."'>
              <i class='icon-pencil'></i></a>".nbsp(1);

    $icons .= "<a title='Deletar Registro' class='btn btn-danger btn-mini delete-button' href='".url($itemType.'/'.$item->id).
                "' data-token='".csrf_token()."' data-resource='".$resource."' data-previous='".URL::previous()."'>
              <i class='icon-trash'></i></a>";
  }

  return trim($icons);
}
