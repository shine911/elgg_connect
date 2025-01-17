<?php
/**
 * Elgg Connect settings
 * @package elgg_connect
 *
 */

$plugin = elgg_extract('entity', $vars);
if (!$plugin instanceof \ElggPlugin) {
	return;
}

$info = elgg_echo('elgg_connect:admin:info');
echo elgg_view_module('info', elgg_echo('elgg_connect:admin:info:title'), $info);

$front .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-front-page',
	'fields' => [
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:caption_h1'),
			'name' => 'params[caption_h1]',
			'value' => $plugin->caption_h1,
		],
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:caption_h2'),
			'name' => 'params[caption_h2]',
			'value' => $plugin->caption_h2,
		],
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:action_h1'),
			'name' => 'params[action_h1]',
			'value' => $plugin->action_h1,
		],
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:action_h2'),
			'name' => 'params[action_h2]',
			'value' => $plugin->action_h2,
		],
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:members'),
			'name' => 'params[members_h1]',
			'value' => $plugin->members_h1,
		],
		[
			'#type' => 'text',
			'#label' => elgg_echo('elgg_connect:label:groups'),
			'name' => 'params[groups_h1]',
			'value' => $plugin->groups_h1,
		],
	],
]);
	
echo elgg_view_module('info', elgg_echo('elgg_connect:header:frontpage'), $front);

$sidebar .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-sidebar',
	'fields' => [
		[
			'#type' => 'select',
			'#label' => elgg_echo('elgg_connect:label:sidebar'),
			'name' => 'params[sidebar]',
			'options_values' => [
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			],
			'value' => $plugin->sidebar,
		],
	],
]);

$sidebar .= elgg_format_element('h3', ['class' => 'mbm'], elgg_echo('elgg_connect:label:sidebar:yes'));

$sidebar .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-usericon',
	'fields' => [
		[
			'#type' => 'select',
			'#label' => elgg_echo('elgg_connect:label:user:icon'),
			'name' => 'params[usericon]',
			'options_values' => [
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			],
			'value' => $plugin->usericon,
		],
	],
]);

$sidebar .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-friends',
	'fields' => [
		[
			'#type' => 'select',
			'#label' => elgg_echo('elgg_connect:label:friends'),
			'name' => 'params[friends]',
			'options_values' => [
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			],
			'value' => $plugin->friends,
		],
	],
]);

$sidebar .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-webmap',
	'fields' => [
		[
			'#type' => 'select',
			'#label' => elgg_echo('elgg_connect:label:webmap'),
			'name' => 'params[webmap]',
			'options_values' => [
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			],
			'value' => $plugin->webmap,
		],
	],
]);

$sidebar .= elgg_view_field([
	'#type' => 'fieldset',
	'id' => 'elgg_connect-wiki',
	'fields' => [
		[
			'#type' => 'select',
			'#label' => elgg_echo('elgg_connect:label:wiki'),
			'name' => 'params[wiki]',
			'options_values' => [
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
			],
			'value' => $plugin->wiki,
		],
	],
]);

echo elgg_view_module('info', elgg_echo('elgg_connect:header:sidebar'), $sidebar);
