<?php

class Navlink extends Eloquent {

    public static function breadcrumbs()
    {
        $path = explode('/', Request::path());

        $breads = array_slice($path, 0, count($path)-1);

        $result = '';
        foreach($breads as $bread)
        {
            $result .= '<li><a href="' . URL::to($bread) . '">' . Navlink::whereHref($bread)->pluck('name') . '</a></li>';
        }

        return $result;
    }

    public static function isURLActive($_link)
    {
        if (Request::is('*'. $_link->href .'*'))
        {
            return true;
        }
    }
	
	public static function generate()
	{
		$result = '<ul class="nav nav-list">' . PHP_EOL;

        $_parent_links = Navlink::whereParentId(0)->whereGroupId(Auth::user()->group_id)->get();

        foreach($_parent_links as $_parent_link)
        {
            $children = Navlink::whereParentId($_parent_link->id)->get();

            $item = Navlink::generateNavLinkItem($_parent_link, $children);

            $result .= $item;
        }

        $result .= '</ul>' . PHP_EOL;

        return $result;
	}

	public static function generateNavLinkItem($link, $children)
	{
		$item = '<li';

        if (Navlink::isURLActive($link) && count($children) == 0)
        {
        	$item .= ' class="active">' . PHP_EOL;
        }
        else
        {
        	$item .= '>' . PHP_EOL;
        }

        if (count($children))
        {
        	$item .= '<a href="#" class="dropdown-toggle">' . PHP_EOL;
        }
        else
        {
        	$item .= '<a href="/'. Group::getPrefix() . '/' . $link->href .'">' . PHP_EOL;
        }

        if($link->parent_id != 0 and $link->icon == '')
        {
        	$item .= '<i class="icon-double-angle-right"></i>' . PHP_EOL;
        }
        else
        {
        	$item .= '<i class="'. $link->icon .'"></i>' . PHP_EOL;
        }

        
        $item .= '<span class="menu-text">' . $link->name . '</span>' . PHP_EOL;

        if (count($children))
        {
        	$item .= '<b class="arrow icon-angle-down"></b>' . PHP_EOL;
        }


        $item .= '</a>' . PHP_EOL;


        if (count($children))
        {
        	$item .= '<ul class="submenu" style="display: block;">' . PHP_EOL;

        	foreach ($children as $child)
        	{
        		$childrenOfChild = Navlink::whereParentId($child->id)->get();
        		$item .= Navlink::generateNavLinkItem($child, $childrenOfChild);
        	}

        	$item .= '</ul>' . PHP_EOL;
        }


        $item .= '</li>' . PHP_EOL;

        return $item;
	}
}