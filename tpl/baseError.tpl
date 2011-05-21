<html>
    <head>
        <title>Fatal Error</title>
        <link href="tpl/css/messagebox.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div class="error">
            <h1>Fatal Error while preparing the installation</h1>
            <p>The installation could not be processed due to problems that cannot be solved by the script. Please make sure you set permissions to the proper directories and upload the correct files.</p>
            {foreach from=$baseError item=items key=category}
            <b>{$category}</b>
            <ul>
                {foreach from=$items item=item}
                <li>{$item}</li>
                {/foreach}
            </ul>
            {/foreach}
        </div>
        <div class="info">
            <p>After fixing this errors you can go again! Just click <a href="install.php">here...</a></p>
        </div>
        <div class="info">
            <p>There might be people with problems like you, check these links first if you can't find a solution!</p>
        </div>
        <div class="warning">
            <p><b>WHAT?</b> you do not know what to do? That sucks, no really! We have 2 options for you now:</p>
            <p>Please check the forum located at <a href="http://www.freebg.de/wbb">http://www.freebg.de/wbb</a> <b>FIRST</b> we have to do a lot stuff to keep things smooth so use the other option <b>just if you can't find a solution at all</b>.<p>
            <p>So you can't find the proper solution? klick this link and a <b>detailed</b> report will be send directly to the forum to help us monitoring what might have happened. This report will be visible to all users (we will remove all passwords as far as you did not type them in a wrong text field<b>!</b>).</p>
        </div>
    </body>
</html>