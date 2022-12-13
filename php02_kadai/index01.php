<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfy - アカウント作成 / Create New Account</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <div>
            <h1>アカウント作成 / Create New Account</h1>
            <h2>プロフィール入力</h2>
        </div>

        <form method="POST" action="insert01.php" id="register" >
            
            <fieldset>
            <UL>

            <!-- 必須項目 -->

                <li><P>氏名（漢字）</P></li>
                <li id="js_name01_area" ><input required id="js_name01" class="" type="text" name="name01"></li>
                <li><P>氏名（ローマ字）</P></li>
                <li id="js_name02_area"><input required id="js_name02" class="" type="text" name="name02"></li>
                <li><P>生年月日</P></li>
                <li id="js_birthday_area"><input required id="js_birthday" type="date" name="birthday"></li>
                <li><P>出身地</P></li>
                <li>    
                    <div id="js_bornplace01_area">
                        <input required type="radio" name="born_place" id="js_domestic" value="国内"><label for="js_domestic">国内</label>
                        <input required type="radio" name="born_place" id="js_overseas" value="海外"><label for="js_overseas">海外</label>    
                    </div>
                    <div id="js_bornplace02_area">
                        <input type="text" class="born-place" name="country" id="js_born_overseas">
                        <select class="born-place" name="prefecture" id="js_born_domestic">
                            <option value="" selected>都道府県</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </div>
                </li>
                <li><P>職業</P></li>
                <li>
                    <div id="js-occupation_area">
                        <select name="occupation" id="js-occupation">
                            <option id="js_occupation_blanc" value=""></option>    
                            <option id="js_business_person" value="会社員・公務員">会社員・公務員</option>
                            <option id="js_part_timer" value="パート・アルバイト">パート・アルバイト</option>
                            <option id="js_company_executive" value="経営者・役員">経営者・役員</option>
                            <option id="js_freelance" value="フリーランス">フリーランス</option>
                            <option id="js_professional" value="士業・専門職">士業・専門職</option>
                            <option id="js_student" value="学生">学生</option>
                            <option id="js_house_person" value="主婦・主夫">主婦・主夫</option>
                            <option id="js_other_person" value="その他">その他</option>
                        </select>    
                    </div>
                    <div>
                        <ul id="js_company_name" class="ocuppation-detail">
                            <li id="js_company_area"><P>勤務先</P></li>
                            <li><input id="js_company" class="" type="text" name="company"></li>
                            <li id="js_division_area"><P>部署名・役職名</P></li>
                            <li><input id="js_division" class="" type="text" name="division"></li>    
                        </ul>

                        <ul id="js_business_name" class="ocuppation-detail">
                            <li><P>職種名</P></li>
                            <li id="js_description_area"><input id="js_description" class="" type="text" name="description"></li>
                        </ul>

                        <ul id="js_school_name" class="ocuppation-detail">
                            <li><P>学校名</P></li>
                            <li id="js_school_area"><input id="js_school" class="" type="text" name="school"></li>
                            <li><P>学部・学科・学年</P></li>
                            <li id="js_grade_area"><input id="js_grade" class="" type="text" name="grade"></li>
                        </ul>

                    </div>
                </li>


            <!-- 任意項目 -->

            <li><P>メールアドレス</P></li>
                <li id="js_email_area02">
                    <div>
                        <input required type="radio" id="open" name="email_ok" value="公開する"><label for="open">公開する</label>
                        <input required type="radio" id="close" name="email_ok" value="非公開"><label for="close">非公開</label>    
                    </div>
                </li>
                <li id="js_email_area01"><input required type="email" id="js_email" name="email"></li>
                <li><P>Facebook</P></li>
                <li id="js_facebook_area02">
                    <div>
                        <input required type="radio" id="open" name="facebook_ok" value="公開する"><label for="open">公開する</label>
                        <input required type="radio" id="close" name="facebook_ok" value="非公開"><label for="close">非公開</label>    
                    </div>
                </li>
                <li id="js_facebook_area01"><input type="url" id="js_facebook" name="facebook"></li>
                <li><P>Instagram</P></li>
                <li id="js_instagram_area02">
                    <div>
                        <input required type="radio" id="open" name="instagram_ok" value="公開する"><label for="open">公開する</label>
                        <input required type="radio" id="close" name="instagram_ok" value="非公開"><label for="close">非公開</label>    
                    </div>
                </li>
                <li id="js_instagram_area01"><input type="url" id="js_instagram" name="instagram"></li>
                <li> <P>Twitter</P></li>
                <li id="js_twitter_area02">
                    <div>
                        <input required type="radio" id="open" name="twitter_ok" value="公開する"><label for="open">公開する</label>
                        <input required type="radio" id="close" name="twitter_ok" value="非公開"><label for="close">非公開</label>    
                    </div>
                </li>
                <li id="js_twitter_area01"><input type="url" id="js_twitter" name="twitter"></li>
                
            </UL>        

            <input type="submit" value="登録" form="register">
            
            </fieldset>

        </form>

      
    </section>

    

<!-- jQuery のプラグイン -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script>
//  【 出身地 】  国内→リスト選択  海外→テキスト入力

$(document).ready(function() {

    $('#js_born_overseas').hide();
    $('#js_born_domestic').hide();
    
$(function() {
    $('[name="born_place"]:radio').change( function() {
      if($('[id=js_domestic]').prop('checked')){
        $('#js_born_overseas').hide();
        $('#js_born_domestic').toggle(); //show
        } else if ($('[id=js_overseas]').prop('checked')) {
            $('#js_born_overseas').toggle(); //show
            $('#js_born_domestic').hide();
        } 
   });
});



//   【 職業 】  詳細入力  選択項目で表示・非表示

        $('#js_company_name').hide();
        $('#js_business_name').hide();
        $('#js_school_name').hide();

$(function() {
    $('#js-occupation').change( function() {

        if($('[id=js_business_person]').prop('selected')||$('[id=js_part_timer]').prop('selected')||$('[id=js_company_executive]').prop('selected')){
        $('#js_company_name').show(); 
        $('#js_business_name').hide();
        $('#js_school_name').hide();

    } else if ($('[id=js_freelance]').prop('selected')||$('[id=js_professional]').prop('selected')) {
        $('#js_company_name').hide();
        $('#js_business_name').show();
        $('#js_school_name').hide();

    } else if ($('[id=js_student]').prop('selected')) {
        $('#js_company_name').hide();
        $('#js_business_name').hide();
        $('#js_school_name').show();

    } else if ($('[id=js_house_person]').prop('selected')||$('[id=js_other_person]').prop('selected')||$('[id=js_occupation_blanc]').prop('selected')) {
        $('#js_company_name').hide();
        $('#js_business_name').hide();
        $('#js_school_name').hide();

    } else{
        $('#js_company_name').hide();
        $('#js_business_name').hide();
        $('#js_school_name').hide();
    
    };
    });
});

});

</script>



</body>

</html>