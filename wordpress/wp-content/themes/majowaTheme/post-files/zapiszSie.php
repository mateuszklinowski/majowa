<h3>Zapisz się</h3>
<!--Latest 4 posts-->
<div>

<?php
if(isset($_POST['entry.1782511083'])){

    $imie = $_POST['entry.1782511083'];
    $nazwisko = $_POST['entry.173465573'];
    $telefon = $_POST['entry.774965994'];
    $email = $_POST['entry.1943066783'];
    $radio = $_POST['entry.1994805656'];
    $taniec = $_POST['entry.491094824'];

    $form_id ='1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE';

    $link = 'https://docs.google.com/forms/d/'.$form_id.'/formResponse -d ifq -d "entry.1202908243=Hello World" -d submit=Submit';



}
?>

    <script>
        !function(exports) {
            exports.submitGoogleForm = submitGoogleForm;

            function submitGoogleForm(form) {
                try {
                    var data = [].slice.call(form).map(function(control) {
                        return 'value' in control && control.name ?
                        control.name + '=' + (control.value === undefined ? '' : control.value) :
                            '';
                    }).join('&');
                    var xhr = new XMLHttpRequest();

                    xhr.open('POST', form.action + '/formResponse', true);
                    xhr.setRequestHeader('Accept',
                        'application/xml, text/xml, */*; q=0.01');
                    xhr.setRequestHeader('Content-type',
                        'application/x-www-form-urlencoded; charset=UTF-8');
                    xhr.send(data);
                } catch(e) {}

                form.parentNode.className += ' submitted';

                return false;
            }
        }(typeof module === 'undefined' ? window : module.exports);
    </script>

    <form method="POST"
          action="https://docs.google.com/forms/d/1HLmqkR4ULHnNvPxnjtUHdotzSLjp5UIIndsMk4FrqkE"
          onsubmit="return window.submitGoogleForm(this);">
        <input type="text" placeholder="Imie" name="entry.1782511083">
        <input type="text" placeholder="Nazwisko" name="entry.173465573">
        <input type="text" placeholder="Nr telefonu" name="entry.774965994">
        <input type="email" placeholder="Email" name="entry.1943066783">
        <input type="text" name="entry.1994805656">
        <input type="text" name="entry.491094824">
        <!--<input type="radio" name="entry.1994805656" value="Solo">
        <input type="radio" name="entry.1994805656" value="Z partnerem">-->
        <!--<select name="entry.491094824">
            <option value="taniec">Tango</option>
            <option value="taniec">Jazz</option>
            <option value="taniec">Salsa</option>
            <option value="taniec">Zumba</option>
            <option value="taniec">Latino Solo</option>
            <option value="taniec">Pilates</option>
            <option value="taniec">Joga</option>
            <option value="taniec">Gimnastyka</option>
            <option value="taniec">Taniec użytkowy</option>
        </select>-->
        <input type="submit">
    </form>
    <?php
    $arg = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'category__not_in' => 5,
    );

    $last4POSTS = new WP_Query($arg);

    if ($last4POSTS->have_posts()) {

        while ($last4POSTS->have_posts()) {
            $last4POSTS->the_post();
            get_template_part('post-files/aside-last-posts');

        }
    }
    ?>
</div>