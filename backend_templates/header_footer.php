<h1>Header And Footer</h1>

<p>The header and footer of your site can easily be added to your site for seamless intergration.</p>

<h3>Implement Header</h3>

<p>The code below will put the header of your current wordpress as the header to your community on Fanopia. To do this, in the Fanopia
admin section of your site go to <i>Settings -> Templates -> Default Template</i>. Copy and past this code into Page Header section of the default
template.</p>

<pre>
&lt;iframe src="<?php echo get_site_url(); ?>/?fanopia_header=1" width="100%" height="100%" &gt; &lt;/iframe&gt;
</pre>


<pre>
&lt;iframe src="<?php echo get_site_url(); ?>/?fanopia_footer=1" width="100%" height="100%"  &gt; &lt;/iframe&gt;
</pre>