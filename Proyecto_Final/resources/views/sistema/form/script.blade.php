<script type="text/javascript">
<!--
function exp_coll(ind)
{
 s = document.getElementById("sp_" + ind);
 i = document.getElementById("im_" + ind);
 i2 = document.getElementById("im2_" + ind);
 if (s.style.display == 'none')
 {
   s.style.display = 'inline';
   i.src = "asset(images/minus.gif)";
   i2.src = "asset(images/book-open.png)";
 }
 else if (s.style.display == 'inline')
 {
   s.style.display = 'none';
   i.src = "asset(images/plus.png)";
   i2.src = "asset(images/book.png)";
 }
}

function exp(ind)
{
 s = document.getElementById("sp_" + ind);
 i = document.getElementById("im_" + ind);
 i2 = document.getElementById("im2_" + ind);
 if (!(s && i && i2)) return false;
 s.style.display = 'inline';
 i.src = "asset(images/minus.gif)";
 i2.src = "asset(images/book-open.png)";
}

function coll(ind)
{
 s = document.getElementById("sp_" + ind);
 i = document.getElementById("im_" + ind);
 i2 = document.getElementById("im2_" + ind);
 if (!(s && i && i2)) return false;
 s.style.display = 'none';
 i.src = "asset(images/plus.png)";
 i2.src = "asset(images/book.png)";
}

function coll_all()
{

 coll(0);
 coll(10);
 coll(15);
 coll(23);
 coll(34);
 coll(105);
 coll(112);
 coll(126);
 coll(133);
}

function exp_all()
{

 exp(0);
 exp(10);
 exp(15);
 exp(23);
 exp(34);
 exp(105);
 exp(112);
 exp(126);
 exp(133);
}
//-->
</script>