<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/1/2019
 * Time: 2:15 PM
 */
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/1/2019
 * Time: 1:14 PM
 */

$con = mysqli_connect("localhost","root","","test_php");

if (!$con)

{
    die("connection error....");
}

/**
 *
 */
function getCats()
{
    global $con;
    $getcatsquery="select * from categories";
    $getresult = mysqli_query($con,$getcatsquery);
    while($row=mysqli_fetch_assoc($getresult))
    {
        $id = $row["cat_id"];
        $title= $row["Cat_title"];

        echo  "<li><a class='nav-link' href='#'>$title</a></li>";
    }

}

function gettitle()
{

    global $con;
    $getbrandsquery="select * from brands";
    $getresult= mysqli_query($con,$getbrandsquery);

    while($row=mysqli_fetch_assoc($getresult))
    {
        $id = $row["brand_id"];
        $title= $row["brand_title"];

        echo  "<li><a class='nav-link' href='#'>$title</a></li>";
    }

}

function getpro_cat()
{
    global $con;
    $a="select * from product_cat";
    $r= mysqli_query($con,$a);

    while($row=mysqli_fetch_assoc($r))
    {
        $id = $row["pro_id"];
        $b= $row["pro_cat"];


        echo  "<option>$b</option>";
    }
}

function getpro_brand()
{
    global $con;
    $a="select * from product_brands";
    $r= mysqli_query($con,$a);

    while($row=mysqli_fetch_assoc($r))
    {
        $id = $row["pro_id"];
        $b= $row["pro_brand"];


        echo  "<option>$b</option>";
    }
}