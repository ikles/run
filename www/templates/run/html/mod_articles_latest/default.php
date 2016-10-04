<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul>
<?php foreach ($list as $item) :  ?>
	<li itemscope itemtype="http://schema.org/Article">
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<?php $images = json_decode($item->images); ?>
				<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
			
		</a>
		<?php echo $item->introtext; ?>
	</li>
<?php endforeach; ?>
</ul>
