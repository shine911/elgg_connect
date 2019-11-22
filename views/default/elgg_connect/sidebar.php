<?php
/**
 * Elgg Connect sidebar
 * @package elgg_connect
 * 
 */

$plugin = elgg_get_plugin_from_id('elgg_connect');
$user = elgg_get_logged_in_user_entity();

if ($plugin->usericon != 'no'){
			
	$icon = elgg_view_entity_icon($user, 'large', array('use_hover' => false));
	echo elgg_view_module('info', elgg_echo($user->name), $icon);
}

if ($plugin->friends != 'no'){
		
	$count = $user->getFriends(array('count' => TRUE));
	
	$title = elgg_view('output/url', array(
		'href' => "/friends/$user->username",
		'text' => elgg_echo('friends'),
		'is_trusted' => true,
	));
	
	$options = array(
		'type' => 'user',
		"limit" => 40,
		'relationship' => 'friend',
		'relationship_guid' => elgg_get_logged_in_user_guid(),
		'inverse_relationship' => false,
		'full_view' => false,
		'pagination' => false,
		'list_type' => 'gallery',
		'no_results' => elgg_echo('friends:none'),
		'order_by' => 'rand()' 
	);
	$content = elgg_list_entities_from_relationship($options);
	
	$title .= '<span> (' . $count . ')</span>';
	echo elgg_view_module('info', $title, $content);
}
if($plugin->wiki != 'no'){
	$title = elgg_view('output/url', array(
		'href' => 'https://google.com',
		'text' => elgg_echo('Wiki'),
		'is_trusted' => true,
	));

	$content = '<table class="infobox taxobox" style="width:16em"><tbody><tr><th colspan="2" style="padding:12px;text-align:center;vertical-align:middle;line-height:1.1em;font-size:135%;font-weight:bold;color:black;background: rgb(180,250,180);">Lúa</th></tr><tr><td colspan="2" style="text-align:center"><a href="/wiki/T%E1%BA%ADp_tin:Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg" class="image"><img alt="Oryza sativa - Köhler–s Medizinal-Pflanzen-232.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg/280px-Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg" decoding="async" width="280" height="367" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg/420px-Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/2/27/Oryza_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-232.jpg 2x" data-file-width="452" data-file-height="592"></a><div style="padding:5px">Cây lúa (<i>Oryza sativa</i>)</div></td></tr><tr><th colspan="2" style="text-align:center;padding:2px;background: rgb(180,250,180);"><a href="/wiki/Ph%C3%A2n_lo%E1%BA%A1i_sinh_h%E1%BB%8Dc" title="Phân loại sinh học">Phân loại khoa học</a></th></tr><tr><th scope="row"><a href="/wiki/Gi%E1%BB%9Bi_(sinh_h%E1%BB%8Dc)" title="Giới (sinh học)">Giới</a> <small>(<i>regnum</i>)</small></th><td><a href="/wiki/Th%E1%BB%B1c_v%E1%BA%ADt" title="Thực vật">Plantae</a></td></tr><tr><th scope="row"><span style="font-weight: normal;">(không phân hạng)</span></th><td><a href="/wiki/Th%E1%BB%B1c_v%E1%BA%ADt_c%C3%B3_hoa" title="Thực vật có hoa">Angiospermae</a></td></tr><tr><th scope="row"><span style="font-weight: normal;">(không phân hạng)</span></th><td><a href="/wiki/Th%E1%BB%B1c_v%E1%BA%ADt_m%E1%BB%99t_l%C3%A1_m%E1%BA%A7m" title="Thực vật một lá mầm">Monocots</a></td></tr><tr><th scope="row"><span style="font-weight: normal;">(không phân hạng)</span></th><td><a href="/wiki/Nh%C3%A1nh_Th%C3%A0i_l%C3%A0i" title="Nhánh Thài lài">Commelinids</a></td></tr><tr><th scope="row"><a href="/wiki/B%E1%BB%99_(sinh_h%E1%BB%8Dc)" title="Bộ (sinh học)">Bộ</a> <small>(<i>ordo</i>)</small></th><td><a href="/wiki/B%E1%BB%99_H%C3%B2a_th%E1%BA%A3o" title="Bộ Hòa thảo">Poales</a></td></tr><tr><th scope="row"><a href="/wiki/H%E1%BB%8D_(sinh_h%E1%BB%8Dc)" title="Họ (sinh học)">Họ</a> <small>(<i>familia</i>)</small></th><td><a href="/wiki/H%E1%BB%8D_H%C3%B2a_th%E1%BA%A3o" title="Họ Hòa thảo">Poaceae</a></td></tr><tr><th scope="row"><a href="/wiki/Chi_(sinh_h%E1%BB%8Dc)" title="Chi (sinh học)">Chi</a> <small>(<i>genus</i>)</small></th><td><i><a href="/wiki/Chi_L%C3%BAa" title="Chi Lúa">Oryza</a></i></td></tr><tr><th colspan="2" style="text-align:center;padding:2px;background: rgb(180,250,180);">Các loài</th></tr><tr><td colspan="2" style="text-align:center"><div align="left">
<ul><li><i><a href="/wiki/Oryza_glaberrima" class="mw-redirect" title="Oryza glaberrima">Oryza glaberrima</a></i></li>
<li><i><a href="/wiki/Oryza_sativa" class="mw-redirect" title="Oryza sativa">Oryza sativa</a></i></li></ul></div>
</td></tr></tbody></table>';
	echo elgg_view_module('info', $title, $content);
}

if($plugin->webmap != 'no'){
	$title = elgg_view('output/url', array(
		'href' => 'https://google.com',
		'text' => elgg_echo('Webmap'),
		'is_trusted' => true,
	));

	$content = '<a href="https://google.com"><img src="https://image.flaticon.com/icons/png/512/235/235861.png"/></a>';
	echo elgg_view_module('info', $title, $content);
}

