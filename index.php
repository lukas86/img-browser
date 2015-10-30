<?php // Zekom Image Studio v-1-0-1 //?>
<html xmlns="http://www.w3.org/1999/xhtml" >
  <head>
    <title>Zekom jQuery Resize And Crop (jrac) example</title>
    
    <!-- jQuery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.js"></script>
    
    <!-- jQuery-Ui -->
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/themes/base/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.js"></script>
    
    <!-- jrac - jQuery Resize And Crop -->
    <link rel="stylesheet" type="text/css" href="./include/jrac/jrac/style.jrac.css" />
    <script type="text/javascript" src="./include/jrac/jrac/jquery.jrac.js"></script>
    
    <!-- This page business -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <script type="text/javascript">
      <!--//--><![CDATA[//><!--
      $(document).ready(function(){
        // Apply jrac on some image.
        $('.pane img').jrac({
          'crop_width': 250,
          'crop_height': 170,
          'crop_x': 100,
          'crop_y': 100,
          'image_width': 400,
          'viewport_onload': function() {
            var $viewport = this;
            var inputs = $viewport.$container.parent('.pane').find('.coords input:text');
            var events = ['jrac_crop_x','jrac_crop_y','jrac_crop_width','jrac_crop_height','jrac_image_width','jrac_image_height'];
            for (var i = 0; i < events.length; i++) {
              var event_name = events[i];
              // Register an event with an element.
              $viewport.observator.register(event_name, inputs.eq(i));
              // Attach a handler to that event for the element.
              inputs.eq(i).bind(event_name, function(event, $viewport, value) {
                $(this).val(value);
              })
              // Attach a handler for the built-in jQuery change event, handler
              // which read user input and apply it to relevent viewport object.
              .change(event_name, function(event) {
                var event_name = event.data;
                $viewport.$image.scale_proportion_locked = $viewport.$container.parent('.pane').find('.coords input:checkbox').is(':checked');
                $viewport.observator.set_property(event_name,$(this).val());
              });
            }
            $viewport.$container.append('<div>Image natual size: '
              +$viewport.$image.originalWidth+' x '
              +$viewport.$image.originalHeight+'</div>')
          }
        })
        // React on all viewport events.
        .bind('jrac_events', function(event, $viewport) {
          var inputs = $(this).parents('.pane').find('.coords input');
          inputs.css('background-color',($viewport.observator.crop_consistent())?'chartreuse':'salmon');
        });
      });
      //--><!]]>
    </script>
  </head>
  <body>
 
    <?php include ('function/upload.php')?>    
    <?php include ('function/browse.php')?>
    
    <h1>jQuery Resize and Crop (jrac)</h1>
    <p>jQuery Resize And Crop (jrac) is a jQuery plugin that build a viewport around a
given image permitting to visually resize an image and place a crop. Then it is
possible to use the coordinates data to be used for any purpose.</p>
    
    <h2>Download</h2>    
    <a href="https://github.com/zekom/jrac">https://github.com/Zekom/jrac</a>
    <pre class="code">
        ZekomZ- Zekom Tribute Magazine - G+
        www.IndieGoGo.com/Zekom
        Zekom. It's the Law.
    </pre>
    
    <p>Move the image or the crop with the pointer, resize the crop with the pointer, use the zoom bar to scale the image or set your values into the inputs.</p>
    <div class="pane clearfix">
      <img src="images/Star-Trek-The-Next-Generations-The-Comm-45adbe5d.jpg" alt="Seminarska naloga" />
      <table class="coords">
        <tr><td>crop x</td><td><input type="text" /></td></tr>
        <tr><td>crop y</td><td><input type="text" /></td></tr>
        <tr><td>crop width</td><td><input type="text" /></td></tr>
        <tr><td>crop height</td><td><input type="text" /></td></tr>
        <tr><td>image width</td><td><input type="text" /></td></tr>
        <tr><td>image height</td><td><input type="text" /></td></tr>
        <tr><td>lock proportion</td><td><input type="checkbox" checked="checked" /></td></tr>
      </table>
    </div>
    
    <?php include('function/preview.php') ?>
    <iframe src="prototype.html" width="950" height="650"></iframe>
    <?php include('function/effects.php') ?>
    
    <div class="footer">
    
<<<<<<< HEAD=======
    </a>
            <a href="https://plus.google.com/102962854949157079552">
            DDNNNNDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMNMN8OZZOOOOOOOOOOOOOOOOOOOO8OO8OOOOO8888888OOOOO888OOZZ8NMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDNNDDDDDDDDDDDDDDD888DDDDDZZ DNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMN8OZZOOOOOOOOOOOOOOOOOOOOOOOOZOOOOOOOOOOO88888OOO88888OZZDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDNNDDDDDDDDDDDDDDDDDDDDDDD88 NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMNN8OZZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888888OO8888OO8OO88OZZODNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDD NNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNMMNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMN8OZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO8OOOOO88OO888OO88O88888OZZ8DNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDD NNNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMNNNNNNNNNMNNOZZZOOOZZOOOOOZZOOOOOOOOOOOOOOOOOOOOOOOOO8OO8888O888O8888O8O888888OOZZODNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDD NNNNNNNN+8OOOOOOOOOOO+777777777777NNNNNNNNNNNNNNNNNNNNNNNNNM8ZOZOOZOOZOOOOZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888OOOOO888888888888888OOZ$O8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDD NNNNNNNN+OOOOOOOOOOOO+777777777777NNNMMMNNNNMNMMNMMMMMNMMNMNZZZOZZOOOOOZZOOZZOOOOOOOOOOOOOOOO8OOOOOOOOOO88OOO8OO88O888888OO8888888888D8OZ$8DNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDNDDD NNNNNNNN+OOOOOOOOOOOO$777I77777777NNNNMMNNMNNMNNMNMMMMMNNNMNZOZOZZZOOZOOOOZZOOOOOOOO88OOOOO8OO888888OOOOOOOOOOOO88888OO888888O88888888888O$Z8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDD NNNNNNNN+OOOOOOOOOOOO7777I77777777NNNI~DNINNN=MNO~MNDNMN=MMNZZZZZZZZZOZZOOOOOOOOOOOOOOOOOOOOOOOZOOOOOOOOOOOOOOOOOOO88O8888OO888OO8D88888888OZ$Z8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNND NNNNNNNN+OOOOOOOOOZ$7=IIII77777777NNNIM7NONNOZNMO=MNMNNM.DNNZZZOZZOOZZZOOOZZOOOOOOOOO8OOOOOOOOOO888O8O88OOOOOOO888O8O88OOOOO$77IIII7$8888888OOZZODNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNN+OOOOOOO7OOO,=?77I77777777NMNIDM?~M$NM$NZ~MMIMNNZMMNZZZZZZZZZZZOOOOOOOOOOOOOOOOOOOOOOOOOOO8OO8888888OOOOOOOO88O8O8Z$II?777II7I$O888888OO$$ONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDNNNNNN NNNNNNNN+OOOOOOZOOO8.=?+77II77I777NMNNMNMNNNNNMMMNMNNMMMNMNNZZZZZZZZZZZZZZOOO88OOOOOOOOOOOOOOOO8OOOO8OOO8O8OOOOOOOO8O88O887III8D88D8ZO88888888888OO$ZDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDNNNNNNN NNNNNNNN+OOOOOZZO$=?.+I,:+77777777NNNNNMNNNMNMD8NMMMNNNMMNMNZZZZZZZZZZOOOOOOZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO88OOO88O$OOOO8$7III$O88888O8O888888888OOZ$ODNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNNNN NNNNNNNM:?=?OOOOOOOOOZ::::::=I$=~~IIIIII?II?II++7?IIIIIIIII7OZZ$ZZZZZZZZZZZZOZZOOOOOOOOOOOOOOOOO88OOOOOOOOOOOO888O7IIIZ8OOOO7IIIII7777777$ZZ8888O88O8O$$8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNN=7I7777I7I+,7?.~$OOOOOZOOONMNNMNNMNNNMNNNMNMMMMMMNNMZZZZZZZZZZZZOOZZZZOOOOOOZOOOOOOOOOOOOOOOOOOOOO88OOOOOO8ZIIII$O8OO8Z$77IIIIIIIIIIII7$8888D888Z$Z8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNM=7I7777I77I77?.$OOOZOOOZOONMMMNMMNNNMNNNNNNNMMMNNNNMZZZZZZZZZZZZOOZOZZZOOZZOOOOZOOZZOOOOOOOOOOOOOO$7ZOOO88OOO$IIIIOO8O8D88O8888888Z$7III7ZD8O88888Z$ODNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNN=7777777?I7II?=OOOZOOOZOOONNN$NM7$7N~M7N=$MN.$MMIMMNZZZZZZZZ$ZZZZZOOZZZZOOZOZZOZZOOOZZOOOOOOOOOOZ7III7OOOO8OO8$7III7OOOO8888888888888Z7IIIO88888888O$$8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNM=777777777II7?OZZOOOOOOOOONM?IMNNINN~MMDO?MMIN,8ONNNZZZZZZZZZ$ZZZZZZZZOOOOOOZZOZZZZZZOOOOOOOOOOOOO$7III7O8OOOO88Z$III7O8OO88Z7IIZ88888$7II788DO8D88888Z$$OMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNMNNNM=777777777777?OOOOOOOOOOOONND=NMN=NN~MNZNM8NINNO$NNMZZZ$ZZZ$ZZZZZZZOZZOOZZOZZ$OOOOOOOOOOZZ$ZZOOZOO8O7III7$8OOOOO88$7III$O8O8O$IIII$$Z$IIIIZ8888D88DD8888Z$ODNNNNMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN MMMMNNNM=777777777777$OOOOOOOOOOOONNNM8ONNNNNNMNNMNMMMMNDMMNZZZZZZZZ$ZZZZZZZZZZZZZZ$ZZZZZZOOOZ77IIIIII$OOOOOO$IIII$OOOOOOOOZ7II77Z88O8$77IIIIIII7$D88O8888888D888OZ$ONMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNMMMN=777777777777~OOOOOOOOOOOONNMNNNNNNNNNNNNNNNNMMNNMNM$$Z$ZZZZZZZZZZZZZZZZZZZZZZZZZZ7IIIII7$77IIII7ZOOO8OZIIII7O8O88OO8O7III7Z888888ZZOOOOO88888888O8888888888Z$Z8NNMMNNNNNNNNNNNNNNNNNNNNNNNNNNNN MMNMMMMM=777777777777=OOOOOOOOOOO8NMMNNNNNNNNNNNNNNNNNNNNNMN$$ZZ$$ZZZ$Z$ZZZZ$$ZZZZZZZZZ$7IIII7ZOOOOO$7II?IOOOOOOZ$IIIIZOOOOOOOOZIIIIO8OO8888OO8888OOO8OO88O88888888888Z$ZDNNNNNMNNNNNNNNNNNNNNNNNNNNNNNN MMMMMMMMNNNNNNNNDDDD8ZII$OOOZ$$$$$$ZZ$$$$$$$$$$$$$$$$$$$$$$$ZZZZZZZZZZZ$$$ZZZZZZZZZZZZ$7II7I$OOOOZOOOZ7IIIZOZZOOO8$7IIIIOOOO8O887III7OOO8OO8888888888OO888DD888888888888$$8NNNMNNNNNNNNNNNNNNNNNNNNNNNNN MMMMMMMMMMMMMNNDDDDDDD$I??$O8OZ$$$$$$$$$$$$$Z$$$$$$$ZZ$$ZZ$ZZZZZZZZ$$ZZZZZ$ZZZZZ$7OZZZZZ$7IIIIZ8ZZZZOO7II7ZZOOOOOOOO$7III7ZOO8Z$7III$OOO8888888888888888888888OO888D8888D8Z$ZDNNNNNMNNNNNNNNNNNNNNNNNNNN MMMMMMMMMMMMNNDDDDDDDD8OI???Z8OO$$$$$$$$$$$$$$$$Z$$$$$$$$$ZZ$$ZZZZZ$$Z$$ZZ$$ZZ77II7ZZZZZOO7IIII7OOOO$7IIIIIIII$ZOOOOOZ7IIIII77IIII7$88OOOOOO888888888D888D8DD88888888D888D88Z$ODNNNNNNNNNNNNNNNNNNNNNNNN MMMMMMMMMMMNNNNDNNDDDDDD8Z???IO8OZ$$$$$$$$$$$$$$$$$$$$$$$$$$ZZZZ$$ZZZ$ZZZZZZZZ77IIIIZZZZZZZ$IIII7$$7IIIIIIIIIIIIZOOOOOOZ7IIIIIII7$888OOO888O88OO8888OOO8888OO8888888888888888O$7ODNNMNNNNNNNNNNNNNNNNNNN MMMMMMMMMMNNNDNNDDDDDDDDDD8OI???Z88O$7$$$$$$$$$$$$$$$$ZZZZ$$$ZZZZZZZZZ$$II$ZZ$ZZ7IIIIIZOZOZZZ7IIIIIII7ZOZZOO$7IIII$OOOOOOOO88OO8888O8OOO88O8OO8OOO888O88888888888888O888D8888888O$$8NNNNNNNNNNNNNNNNNNNN MMMMMMMMMMNNNNNNNNNNDDDDDDDD8ZI??IZ8OO$7$Z$$$$$$$$$$$$$$$$$$$$ZZ$$$$Z$IIIII$ZZZZZ$IIIII7ZZZZZZ7IIIII$OOZOOOOOZ77IIIIZOOOOO888OOOOOOOOOOOOOOOO88OOOOO8OOO888888888D888888O888DD888O$7$8NNNNNNNNNNNNNNNNNN MMMMMMMMMNNNNNNNNNDNDDDDDDDDDDZ7??II8OZZ$$$$$$$$$$$$$Z$$$ZZZ$$ZZZZ$$ZZ7IIIIIZ$Z$ZZ$7IIII$ZZZZZZZ7IIII7OOZZOZZZOZIIIII?O8OOZOOO8OOOOOOOOOOOOOOOOOOOO8O888888888888888888D88888D888888$7ODNNNNNNNNNNNNNNNN MMMMMMMMNNNNNNNDNNDDDDDDDDDDDDD8O$??+?88OZ$$$$$$$$$$$$$$$$ZZ$$ZZZ$$$$$Z$IIII7$Z$ZZZZ77IIIIZZZZZZZZ7IIII7OOZOOOOOOZ7I7ZOOOOOOOOOOOOOOZOOOOOOOOOOO8888OO888O888888OOO88888888888888888OZ$78NNNNNNNNNNNNNNN MMMMMMMMNNNNNNDDNDDDDDDDDDDDDDDD88Z7???IO8OZ$77$$$$$$$$$$$77II7$$$$Z$$ZZ7IIIIIZ$Z$ZZZZIIIIIIOOZOZZZ7IIII7ZOZZOZZOOOOOOZZOOOOOOZOOOOOOOOOOOOOOOOOOOOOOOOO888888OO8888888888DDDD88888O8OZZ$8NNNNNNNNNNNNNN MMMMMMMNNNNNNNNNDDDDDDDDDDDDDDDDDDD8$I???7OOZ$$$$$$$$$$$$7IIIIII$$$$$$$Z$7IIII7Z$$Z$ZZZ7IIII7$ZZZZZZ7IIIII$ZOOZZZOOOOOOOOOOOOOZOOOOOOOOOOOOOOOOOOOOO8OOOOOOOOOOO888888888O888888OOOOO88O$$DNNNNNNNNNNNNN MMMMMMNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDD8Z7???IO8ZZ$$$$$$$$$$$7IIIIII$$Z$$$Z$7IIII7Z$ZZZZ$Z$7IIII7$ZZOZZO7IIII7ZOOOZZOOOOOOOOOOZZOOOOOO8OOOOOOOOOOOOOOOOOOOOOOOOOOOO888OO88DDD888888888888OOZ8NNNNNNNNNNNNN MMMMMNNNNNNNNNNDDDDDNDNDDDDDDDDDDNDDDD88$I??I$88Z$$$77$$$$$Z77IIIIII$Z$$$$$7IIII$Z$$$$ZZOZ7IIIII$OZOOOZ$II$ZOOZZOZZOOZOZZOZZOOOOOZZOOOOOOOOOOO88OOOOOOOOOOOOOOOOOOOOOO888888888888888888888DNMNMMMMNNNNN MMMMNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDDDDOI???7ZOO$$7$$$$$$$$$7IIIIII7$$$ZZ$IIII7$$$ZZ$ZZZ$$IIIII7ZZZOOOZZZOZZZZZZOZZZZZZZZZZOZOOOOOZOOOOOOOOOOOOOOOOOOOOOOOOOOO8888OOOO88888888D888DDD8888DNNMMMMMMNNNN MMMMNNNNNNNNNNNNNNDDNDDDDDDDDDDDDDDDDDDDDDD87???I$O8Z$$$$$$$$$$$$7IIIIII$$$$$7IIII$Z$ZZZZ$$ZZ$IIIII7ZOOOZZOZZZOOZZZZZZOOZZZOZZOOOOZZOOOOOOOOOO8OOOOOOOOOOOOOOOO8888OOO8888888888D8888888ZZ8DNNNNMMMMMMNN MMNNNNNNNNNNNNNNNNDNNNDDDDDDDDDDDDDDDDDDDDDD8OI???$Z8OZ$$$$$$$$$$$$7IIIIII$$$$IIII7$$$$$$$$$ZZ7III$ZZOOOZOOZOOZZZZOZZZZOZZZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO8OOO8888888888888ODD888OZODDDDNMMMMMMMMM MMNNNNNNNNNDDNNDNNNNNNDDDDDDDDDDDDDDDDDDDDDDDDOZ???I$OOZ$$77$$$$$$$$7IIIIII7ZZ$7III7O$$$$$$$$ZZZZZZZZZZZZOZZZZZZOOZZZZZZZZZZOOOZOOOOZOOOOOOOOOOOOOZOO8OOOOOZZOO8888OOOO888888888OOOO88Z$Z8DDDDNNMMMMMMMM MNNNNNNNNNNNNDDNNNNNNNNNDDNNDDDDDDDDDDDDDDDDDDDD8OI???$Z8OZ$$$$$$$$$$$$7IIIIII$Z7III7$ZZZ$ZZZZZZZZZ$Z$OOOZZZOOZZOZZZOZZZOZOOOOOOOOOZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO8888O888888DO$7$8DDDNDDNNMMMMMMM NNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDNNDDDDDDDDDDOZ???IZO8O$$$$77$$$$$$$7IIIII77IIII7ZZ$$$$ZZZ$ZZZZ$ZZZZZZZOZZZZZZZZZZZOOOOOZZOZZOOOOOOOZZOOOOOOOOO8OOOOZZZOOOOOOOOOO8888888888DD8Z77$ZDDNNNNNNNNMMMMMM NNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNDDDDDDNNDDDDDDDDDDDDZ7???IZOOZ$$$$7$$$$$$$7IIIIIIIIIIIZZ$$ZZZZZ$ZZZZZZZZ$ZZZOOZZOOZZZZZZZZZZOZZZOOZZZOOOOOOOOOOOOOOOO8O88OZZZOOOOOOOOOOO8O8888DD88$777Z8DDNNNNNDNNMMMMMM NNNNNNNNDDNNNNNNNNNNNNNNNNNNNNNNNDDDNNNNDDNDDDDDDDDDDD8$???I$O8OZ$$$77$$$$$$$7IIIIII7$ZZ$$ZZZ$$$ZZZZZZZZZZZZZZOZZZZZZZZZOZZZOOZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO8888888OZ777$ZO8DDNNNNNNNDNNMMMMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNDDDDDDDDDDDDDDDDZ7???IZOOZ$$$$77$$$$$$$7II$$$$$$$$$ZZZZZZZZZZ$ZZZZZZZZZZZZZZZZZZZOOZZZZZZZZOOZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO88888O888$777$ZD8DDDDDNNNNNDDNNMMMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDD8$I??I7O8OZ$$$$$$$$$$$Z$$$$$$$$$$$$ZZZZZZZZZ$ZZZZZZZ$ZZZZZ$ZZZZZZZZZZZZZZZZZZZZZZOOOOZZOOOOOOOOOOOOOOOOOOOOOOOO8888$$$7$Z8DDDDDDDDDDNNDNNNNMMMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNDDDDDDDDDDDDDDDDDDZ7??I7OOZZ$$$$77$$$$$$$$$$$$$$$$$$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZOOZOZZOOOOOOOOOOOOOOOOOOOOOOZZOOOOOOOOOOO88O$7$$ZO8DDDDDDDDDDDDNNNNNNNNMMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDD8$I??I7O8OZ$77$$$$7$$$$$$$$$$$$$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZOZZZZZOOOOOZZZOOOOOOOOOOOOOOOOOOOO888OZ$$$ZODDDNDDDDDDDDDDNNNNNNNNNNMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDNNDNNDNDDDDDDDDDDDD887???7ZO8Z$$$$$$$7$$$$$$$$$$$$ZZZZZZZZ$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZOOZZZOZZOOOOOZZZOOOOOOOZZZOOOOOO88OZ77$$$Z8DNNNNNNNDDNDNNNNNNNNNNNNNMM NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDNNNNNNNDDDDDDDDDDDD87I??7$88ZZ$$$$$$$$$$$$$$$$$$ZZZZZZ$$ZZZZZZZZZZZZZZZZZZZZZZZZZOZOZZZZOOZZZZZZOOOZOOOOZOOZZOOO8888Z77II7O8DDNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNNNNNNNNNNNNNNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDOI???7Z8OZ$$777$$$$$$$$$$$$$$$$$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZOOOOOZZOOOOOOZOOZO88Z$7777ZODDNNNNNNNNNNNNNNNNNNNNNDNNNNNNNN NNNNNNNNNNNNNNNNNNNNNNNNDMNNNNNNNNNNNNNNNNNNNNNNNDDDNNNDDDNDDDDDNDDN8ZI??I$ZOOZ$$$$$$$$$$$$$$$$ZZ$$$$ZZ$$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZOZOOOOOOOOOZOOOOZ$7777$ODDNNNNNNNNNNNNNNNNDNNNNNNNNNNNNNNN NNNNNNNNNNNNNNNNNNNNNNNN:NNNNNNNNNNNNNNNNNNNNNNNNNNNNDNNDDNDDDDDDDNDDD8ZI???7ZOOZ$$$7$7$$$$$$$$$$$$$$$ZZZ$$$ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZOOOZZOZOOOOZZ77$77$O8DDNNNNNNNNNNNNNNNNNNDNNNNNNNNNNNNNNN NNNNNNNNMNNMNNNMNMNMDNMN.MNNDNNNNNNNNNNDNNNNNNNNNNNNNNNNNDDDNNDDDDNDDDNDO$???I$ZOO$$$$$$$$$$$$$$$$$$$$$$$$$$$$ZZ$$Z$ZZ$ZZZZZZZZZZZZZZZZZOOZZZZZOOOOOOO88ZZ$777$ZO8DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNNMN....DNNIZNNM~NNN.~..7NND8:...ONNM.$...NNNNNNNNNNNNDDNNNNDDNNDDDDDDZ7???IZOOO$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$Z$ZZZZ$ZZZZZZZ$$ZZZZZZZZZZOZZZZOOO8OOZ$7$$$Z88DDNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNMI.MNNNNNNM.DN~DNNM.MNN.?NN.:OZ?.NNN.DNNNNNNNNNNNNNNNNNNNNDNDDDNDNDNDDDO$???IZOOZZ$$$$7$$$$$$$$$$$$$$$$$$$$$$$$$$$$Z$$$$$$$$$$ZZZZZZZZZZZOOOOOZ$$$$ZZO8DDNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN NNNNNMI.MNNNNNMN:,+.MNNN.DNN.IMN.,I?I7MNN.NNNNNNNNNNNNNNNNNNNNNDNNNNDNNNNNDDDDZ7??I7ZOOO$$$77$$$$$$$$$$$$$$$$$$$$Z$$Z$$ZZZ$ZZ$$$$$ZZZZZZZZZZZOOOZZ$$$7$Z88DDNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN DNNNNMM8.::=MNMND..ZNNMN. ~::DNN?.~~~=NNN.NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDNDDD8$I??I7O8OZ$$$$$$$$$$$$$$$$$$$$$$$$ZZ$ZZZZZZZZ$$$$ZZZZZZZZZZO8OZ$$$ZZZO8DDDDDNNNDDDNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN OODNNNNNNNNMNNMMN:NNNMNMNNNNMDNNNNNNNNNNNMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDD8$7??I7ZOOO$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ZZZZOOOZ$$$$$$ZO8DNNNNNNDDNNNNDDNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN OOO8DNNNMDNNNNN8~=NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDNNNNDDD87I??I$OOOZ$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ZZOOOZZ$$$$$ZO8DDNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN OOZZO8NNMMM.NDMNNMNMMNNNMN...?NDNNDNNNNNMDNNDMMDNNNNNNNNMNDNNNDNNNNNNNNNNNNNNNNNDDDD8ZII??7$O8OZZ$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ZZZOZZ$$$$$ZZ88DNDNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 888OOZ8O~~D.MNNMI~:7NNNNI:,~MNNNND~~OMNNN?D$~+NNNMN7~~=NNDN7~~8MNNNNNNNNNNNNNNNNNNDNDNDO7I??I7O888ZZ$$$$$$$$$$$$$$$$$$$$ZZZZZZ$$$7$$$$ZO88DNNNNNNNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 8888OZI.O8..MNM$=DM7?NMNNZINMMNN:.NN:.NNN..?N~NNNN.:NNNNNN.=NN.+NNNNNNNNNNNNNNNNNNNNNDND8ZI??I7$O888OOZZ$$$$$$$$$$$$$ZZZZZZZZ$7$$$ZZO88DDDNNNNNNNNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 888888+.ZOD.MNMI+7II~MMNNZINMNNN.:II~.NNN.NNNIONMZINNNNNNN.+II.~NNNNNNNNNNNNNNNNNNNNNNDDD8Z$II??7Z8888OOZZZZZZZZZZZZZZZZZZZZZ$$ZOO88DDDDNNNNNNNNNNNNNNNNNDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 88888DI.OZ..D8N$+NNMNMNMNO?NNNMN,,MNNNNNN.NNNIONNN.:NNNNNN.+NDNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDOZ$$ZO8DDD888OZ$77777777$$ZZOOO888DDDDNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMM 888888D8::Z=Z88NI~~~7NMMN8OMNNMNNO~~~=NNN+NNM88NNNN$~~=NNNNI~~~7NNNNNNNNNNNNNNNNNNDDNDNNDDDDD8OO8DDDDDDDDDOZIIIIII77$Z88DDDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 888888888888OZOODNMMNMMNNNNNMMNNMNMNMNNMNMNNNNDNNMNNNNNNMDNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNDDDD888DDDDDNNDNND8Z$777$$Z8DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMNN 88888888D8O888OZO8DDMMNMMMNMMMMDMMNMMNNNNNNNNNNNNMMNMNDNNNNN.INNMDNDNNNNNDNNO.ZNNNNNNNNNDNDDD8D8DDNDNNNNNNND88OOO8DDNNNNNNNNNNDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMM 88888OD88D88888OOZOODNNNMMMNMNNNNNNNNNNNNNNMMNMNNNI.DNNNNNNNODNNNNNN~NNDNNNNNONNNNNNNDDNDNDND8D8DDDNNNNNNNDDD88888DDNNNNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMNMM 88888888~...8888~..~88DN~:I+~MNM:?,.DNNNMN,..IMNN8... ONNN?..ZNNNN?....?MNMN..8NNNNMZ,..NNND,7:.~8NDDNNNNNDDD88888DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMM 888888+.8888888?$8DO:OO8.N.O.IMN.:NN?.MMN.MNNIZMNM?.NNNNNMNN.INNMNNN:NDNNNNMNIZNMDND~NNN.ZNN.=DD~.DNDNNNNNNDD8888DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMM 88888D?.888888O?$88D:OOO.D.Z.IMN.~NM?.MMM.....8MMDI.NNNNNNNN.INNNNNN:NNNNNNNMIZNNNDD~NNN.ZNN.?DD:.NNNNNNNNDDD8888DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMNNMMMMM 8888888::$$$888$,77~?88Z.O.Z.IMM..NN.:MMM~IZOOMNNM7.OO.DNNDO.+DMNNNN,ZI.NNNMO+7ZNNNN.?$7.DDN.?8D=.DDNNNNNNDDD8888DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMM 888888888888888888888888OOOO8DNN.~MMMNNMNNMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDNNNNNNNNNDD8888DDNNNNNNNNNNNNNNNNNNNNNNDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMM 88888888888888888888888888OOOODD.~MNMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDNNNNNNNNNDD8888DDNNNNNNNNNNNNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMM 8888888888888888888888888888OOO8DNMMMNMMMMNNMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNDDD88DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMM 888888888888888888888888888888OOOODDNNMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNDDDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMM 88888888888888888888888888888888OO88DNNNNNMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDNNNNNNNNNNDDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMNNMMMMMMMMMMMMMMMMMMMM 88888888888888888888888888888888OOOO88DNNMMMMMMMMMMNNNMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDNNNNNNNNNNDDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMN 88888888888888888888888888888888888OOO88NNMMMMMMMMMMMNMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNDDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMNN 8888888888888888888888888888888888888OOODDNMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNN 88888888888888888888888888888888888888OO88NNMMMMMMMMMMMMMNMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNDDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMNMMMMMMMMMMMMMMMMMMMMNNNN 8888888888888888888888888888888888888888O8DNNMMMMMMMMMMMNNMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNNNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMMNNNNN 8888888888888888888888888888888888888888OODDNNMMMMMMMMMMNNMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMNNNNNN 888888888888O88888888O8888888O88O888888DO88DNNMMMNMMMNMMNMMMMNMMNNNNMMMNNMNNNNNNNNNNNNDNNNNDNDDNNNDNNNNNNNNNNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMNNNNNN 888888?I8888O8888888888O8O888O888888~Z888D?DNNNMMMMMZMMMMNMMNNMMMN+NNNNNMNNMNDNNNNNNNNNNNND$NDNNNDDMN$NNNNINNNDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMNMMMMMMMMMMMMMMMMMMMMNNNNNNNN 888888,,?88+:,O888888.:.88I::8$,:,8D.:$8O+~8DN.~?MN+IMMN:~OMNZ~,MD,~NM$,:~NNNNNNNNNNNINNID$~DDD8:~ON$=NDD$,~NMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNNNNNNN 888888??888.88O888888.8888,~.8$:8888~$O888~DDNMNMMMMIMNMMN.MZ.~.MN~NMN~:~.NNI+NNNNNNNN8ONNNNDNDN+.DNNNNNNNINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMNMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNN 8888888ZO888$$8888888.+$88$$OOOO88888ZZO8$ZZDN8O8NM8Z8MM87MNMD8DNMNZMMM8Z8NMMMMDNNNNNN8DNMDZZDNNOZNN8ZZNNN8ZNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDD888OOOOO88888DNNNMMNNMMMMMMMMMMMMMMMMMMNNNNNNNNNN OO88888888OO888888888O888O88OD888888OOZOO8DNNNNNNNMNMMMMMNMMNMNMMMNMMMNMNNNNNMNNNNNNNNNNNNNNDNNNMNNNNNDDNNNNNNNMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDD88OOOOOOZZOOOOZOOODDNNMMMMMMMMMMMMMMMMMMNNNNNNNNNNNN 8OOOOO8O8O888O8O88888888O88888888888ZZZZ88DNNNNNNNNMMMMMNMMMMMMNMMMNMMNNMNMNNMNNNNNNNNMNMDNNDDNNNDDNNMNNNNDMNMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDD88OOOOOOOOOOOOOOOOZZOO8DNNMMMMMMMMMMMMMMMMNNNNNNNNNNNN 8OO8888888888O888888888888D888D888OZ$$ZO8DNNNNDNDNNNMMMMMMMMMMMMMMMMMMMNNNMMNNNMNNNNNNMNNNMDNNNNNNNNNNDNNMNNNMNMNNNNNNNNNNNNNNNNNNNNNNNNNNNNND888OOOOO888OOOOOOO8888OOOOOO88DNMMMMMMMMMMMMNNNNNNNNNNNNNN 8888888O88OO8O888O88888O888888O8OZZ$$$ZO8DDNDNNDNNNNNNMMMMMMMMMMMMMMMNMNNNNNNNNNNNNNNNNNNNNMDMNNNMNNNNNMNMMNMDMMNNNNNNNNNNNNNNNNNNNNNNNNNNNDD88OOO888888OOOOOOOOO888OO88OOOO88NNMMMMMMMMMMNNNNNNNNNNNNNN 888888O8OO8O8888888888888887$88OZZ$$ZZ8D8NNDNNNNNNNNMNMMMNMMOOMNMMMMMMMMNNNMMNMMNNNMNNNNDNIIN?NN77MN7NN$MNZONNNMNNNNNNNNNNNNNNNNNNNNNNNNNDD88OOOO888O8888OOOOOOO8888OO8888OOOO8DNMMMMMMMMNNNNNNNNNNNNNNN OO8OO8$Z$$8?7DO8Z$$$88O888O7OOZ7$IZOZ8DD8$N8NNDN?NZZNONNNN?NO$8MMNNDMN78MMMDNN7M7DD?NNIONN?D8?NNOONNNNNMNOMNONNNNNNNNNNNNNNNNNNNNNNNNNDD88OOOOOOOO888888OOOOOO8888OOOO888888OOOO88NNMMMMMNNNNNNNNNNNNNNN O88OOOIIIZ87IIO8IIIO88$Z88ZIZZ$IZ7OO78DD8INNNN$NINZ$N$MNDMINZOIZMMO$NMZ$MMMDNN$N7DD?MDDNNN?NI?N888DNNMMNMNOZNNNMNNNNNNNNNNNNNNNNNNNNDD88OOOOOOOOO8888OOOOOOOOOOO8OOOOO88888888OOOO8DNNNNNNNNNNNNNNNNNNNN O888O8O8O88O8888ODO88888OOO$$$ZZ88DDDDDNMNNNNMNNNNNNNNNMMMMNMMMNMMMMMMNMMMMMMMMNNNMNNNNNNMNNMNDMMNNNNNNNDMNMNNMNNNNNNNNNNNNNNNNNNNDD8OOOOOOOOOOO8888OOOOOOOOOOOOOOOOOO8888888888OOOO8DDNNNNNNNNNNNNNNNNN 88OOO88888OO888888888OOZZZ$ZZZO8DDDDNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMNNND88OOOZZOOOOOOO888888888OOOOOOOOOOOOOOO8888888888888OOOO88DNNNNNNNNNNNNNN 88OOOOOOOO888888888OOZZ$$$ZZO8DDDDDDNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMNMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMNNNMMMMMMNNNDDOOZZOOOOOOOOOOO8888OOOOOOOOOOOOOOOOOOOOO888888888888OOZZO8DDDNNNNNNNNNNN 88888OOO88888888OOOZZ$$$ZZOO8DDNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMNNNNDD8OOOOOOOOOOOOOOOOOOOOOO8OOOO8OO8OOO888OO8888888888888888OOOO88DNNNNNNNNNNN OO8OO8OO888888OOZZ$$$ZZO88DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNMMMMNNNNMMMNDD88OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888888888888888888OOOO88DDNNNNNNNN OOOOOO88888OOOZZZZZZZO88DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNMMMNNMMNNNDD8OOOOOOOOOOOOOOOZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888888888OO888888888OOO88DDNNNNNN OOOOOO88OOOOZZZ$ZZZO88DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNMMNNMMMNNNND88OZZOOOOOOOOOOOOOZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888888888OO8888888888OOOO88DDNNNN OOOOOOOOZZZZ$ZZZOO8DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNMMMNNNNDD88OOZZZOOOOOOOOOOOOOOOOOOOOOOOOOOZOOOOOOOOOOOOOOOOO8888888888OO888888888D888OOOO8DDNN OOOOOOZZZZ$ZZZOO8DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNNNNDD8OOOOOZZZOOOOOOOOOOOOOOZZOOOOOOOOOOOOOOOO8O88888OOOOOO888888888OO88888888888888OOOO88DD 8OOOZZZZZZZZO88DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNNNNNDD88OOOOOOOZZZOOOOOOOOOOOOOOOZOOOOOOOOOOOOOOOOOOOO8888OOOOO888888888OO88888888888888OOOOOO88 OZZZZZZZOO88DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNNNNDDD8OOOOOOOOOOOZZZZZZZZZZZOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO888O88888OO8888888888888888888OOO ZZZZZOOO88DDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNNNNDD88OOOOOZOOOOOOZZZZZZZZZZZZZZZOOZZZOOOOOOOOOOOOOOOOOOO8OOOOOOOOO8888888888OOOOOOOOO8888OO88888888 ZZZOO88DDDNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNMMMMMMMMMMMMMMMMMMMMNNNNNNNNNNNNNNDD88OOZZZZZZOOOOOOZZZZZZZZZZZZZZZZZZZZOOOOOOOOOOOOOZZZOO8OOOOOOOOO88888888888OOOOOOOOOO8OOOOO8888888 
    </a>
>>>>>>> 5efccc40ed52e3a7d43ccb57d9575079dc23c4f3
</div>
  </div>
  

  </body>
</html>
