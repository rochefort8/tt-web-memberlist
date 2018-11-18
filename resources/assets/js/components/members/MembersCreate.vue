<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new member</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">お名前（漢字）</label>
                            <div class="input-group">
                                <span class="input-group-addon">姓</span>
                                <input type="text" class="form-control" name="last_name_kanji" id="name_kanji_family" placeholder="" x-autocompletetype="surname" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">名</span>
                                <input type="text" class="form-control" name="first_name_kanji" id="name_kanji_family" placeholder="" x-autocompletetype="surname" required>
                            </div>
                        </div>
                    </div>  
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">お名前（カナ）</label>
                            <div class="input-group">
                                <span class="input-group-addon">セイ</span>
                                <input type="text" class="form-control" name="last_name_kana" id="name_kanji_family" placeholder="" x-autocompletetype="surname" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">メイ</span>
                                <input type="text" class="form-control" name="first_name_kana" id="name_kanji_family" placeholder="" x-autocompletetype="surname" required>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="graduate" class="control-label">卒業期</label>
                        
                                <select name="graduate" id="graduate" class="form-control" x-autocompletetype="region">
                                    <option value="" selected="selected">-- 卒業期 --</option>
                                    <option value="40">40期(1942年/昭和17年卒)</option>
                                    <option value="41">41期(1943年/昭和18年卒)</option>
                                    <option value="42">42期(1944年/昭和19年卒)</option>
                                    <option value="43">43期(1945年/昭和20年卒)</option>
                                    <option value="44">44期(1946年/昭和21年卒)</option>
                                    <option value="45">45期(1947年/昭和22年卒)</option>
                                    <option value="46">46期(1948年/昭和23年卒)</option>
                                    <option value="47">47期(1949年/昭和24年卒)</option>
                                    <option value="48">48期(1950年/昭和25年卒)</option>
                                    <option value="49">49期(1951年/昭和26年卒)</option>
                                    <option value="50">50期(1952年/昭和27年卒)</option>
                                    <option value="51">51期(1953年/昭和28年卒)</option>
                                    <option value="52">52期(1954年/昭和29年卒)</option>
                                    <option value="53">53期(1955年/昭和30年卒)</option>
                                    <option value="54">54期(1956年/昭和31年卒)</option>
                                    <option value="55">55期(1957年/昭和32年卒)</option>
                                    <option value="56">56期(1958年/昭和33年卒)</option>
                                    <option value="57">57期(1959年/昭和34年卒)</option>
                                    <option value="58">58期(1960年/昭和35年卒)</option>
                                    <option value="59">59期(1961年/昭和36年卒)</option>
                                    <option value="60">60期(1962年/昭和37年卒)</option>
                                    <option value="61">61期(1963年/昭和38年卒)</option>
                                    <option value="62">62期(1964年/昭和39年卒)</option>
                                    <option value="63">63期(1965年/昭和40年卒)</option>
                                    <option value="64">64期(1966年/昭和41年卒)</option>
                                    <option value="65">65期(1967年/昭和42年卒)</option>
                                    <option value="66">66期(1968年/昭和43年卒)</option>
                                    <option value="67">67期(1969年/昭和44年卒)</option>
                                    <option value="68">68期(1970年/昭和45年卒)</option>
                                    <option value="69">69期(1971年/昭和46年卒)</option>
                                    <option value="70">70期(1972年/昭和47年卒)</option>
                                    <option value="71">71期(1973年/昭和48年卒)</option>
                                    <option value="72">72期(1974年/昭和49年卒)</option>
                                    <option value="73">73期(1975年/昭和50年卒)</option>
                                    <option value="74">74期(1976年/昭和51年卒)</option>
                                    <option value="75">75期(1977年/昭和52年卒)</option>
                                    <option value="76">76期(1978年/昭和53年卒)</option>
                                    <option value="77">77期(1979年/昭和54年卒)</option>
                                    <option value="78">78期(1980年/昭和55年卒)</option>
                                    <option value="79">79期(1981年/昭和56年卒)</option>
                                    <option value="80">80期(1982年/昭和57年卒)</option>
                                    <option value="81">81期(1983年/昭和58年卒)</option>
                                    <option value="82">82期(1984年/昭和59年卒)</option>
                                    <option value="83">83期(1985年/昭和60年卒)</option>
                                    <option value="84">84期(1986年/昭和61年卒)</option>
                                    <option value="85">85期(1987年/昭和62年卒)</option>
                                    <option value="86">86期(1988年/昭和63年卒)</option>
                                    <option value="87">87期(1989年/平成1年卒)</option>
                                    <option value="88">88期(1990年/平成2年卒)</option>
                                    <option value="89">89期(1991年/平成3年卒)</option>
                                    <option value="90">90期(1992年/平成4年卒)</option>
                                    <option value="91">91期(1993年/平成5年卒)</option>
                                    <option value="92">92期(1994年/平成6年卒)</option>
                                    <option value="93">93期(1995年/平成7年卒)</option>
                                    <option value="94">94期(1996年/平成8年卒)</option>
                                    <option value="95">95期(1997年/平成9年卒)</option>
                                    <option value="96">96期(1998年/平成10年卒)</option>
                                    <option value="97">97期(1999年/平成11年卒)</option>
                                    <option value="98">98期(2000年/平成12年卒)</option>
                                    <option value="99">99期(2001年/平成13年卒)</option>
                                    <option value="100">100期(2002年/平成14年卒)</option>
                                    <option value="101">101期(2003年/平成15年卒)</option>
                                    <option value="102">102期(2004年/平成16年卒)</option>
                                    <option value="103">103期(2005年/平成17年卒)</option>
                                    <option value="104">104期(2006年/平成18年卒)</option>
                                    <option value="105">105期(2007年/平成19年卒)</option>
                                    <option value="106">106期(2008年/平成20年卒)</option>
                                    <option value="107">107期(2009年/平成21年卒)</option>
                                    <option value="108">108期(2010年/平成22年卒)</option>
                                    <option value="109">109期(2011年/平成23年卒)</option>
                                    <option value="110">110期(2012年/平成24年卒)</option>
                                    <option value="111">111期(2013年/平成25年卒)</option>
                                    <option value="112">112期(2014年/平成26年卒)</option>
                                    <option value="113">113期(2015年/平成27年卒)</option>
                                    <option value="114">114期(2016年/平成28年卒)</option>
                                    <option value="115">115期(2017年/平成29年卒)</option>
                                    <option value="116">116期(2018年/平成30年卒)</option>
                                    <option value="0">不明</option>
                                    <option value="-1">非卒業生</option>
                                </select>
                            </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="email" class="control-label">メールアドレス</label>
                            <input type="email" class="form-control alphabet" name="email" id="email" placeholder="yoki-kana@tochiku.com" pattern="^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$" x-autocompletetype="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 has-feedback">
                            <label for="zip" class="control-label">郵便番号</label>
                            <input type="text" class="form-control alphabet" name="zip" v-model="zip" placeholder="xxx-xxxx" pattern="\d{3}[\-\s]?\d{4}" x-autocompletetype="postal-code">
                            <span class="help-block">入力後に住所が自動入力されます</span>
                        </div>

                        <div class="form-group col-xs-12 has-feedback">
                            <label for="pref" class="control-label">都道府県</label>
                            <select name="pref" id="pref" class="form-control" x-autocompletetype="region">
                                <option value="" selected="selected">-- 都道府県 --</option>
                                <optgroup label="北海道">
                                    <option value="1">北海道</option>
                                </optgroup>
                                <optgroup label="東北">
                                    <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                </optgroup>
                                <optgroup label="関東">
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                </optgroup>
                                <optgroup label="北陸">
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                </optgroup>
                                <optgroup label="中部">
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                </optgroup>
                                <optgroup label="近畿">
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                </optgroup>
                                <optgroup label="中国">
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                </optgroup>
                                <optgroup label="四国">
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                </optgroup>
                                <optgroup label="九州">
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12 has-feedback">
                            <label for="address" class="control-label">市区町村/番地</label>
                            <input type="text" class="form-control" name="address" id="address" x-autocompletetype="street-address">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-xs-12 has-feedback">
                            <label for="building" class="control-label">建物名など</label>
                            <input type="text" class="form-control" name="building" id="building">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12 has-feedback">
                            <label for="tel" class="control-label">電話番号</label>
                            <input type="tel" class="form-control alphabet" name="tel" id="tel" placeholder="" pattern="(0\d{1,4}[\-\s]?\d{1,4}[\-\s]\d{4})||(0{1}\d{9,10})" x-autocompletetype="phone-national">
                            <span class="help-block"><span class="label label-default">注</span>市外局番よりご記入ください。</span>
                            <span class="help-block">固定電話/携帯電話いずれもOKです.</span>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="graduate" class="control-label">出身中学</label>                    
                            <select name="junior_high_school" id="junior_high_school" class="form-control" x-autocompletetype="region">
                                <option value="" selected="selected">-- 出身中学 --</option>
                                
                                <option value="木屋瀬">木屋瀬</option>
                                <option value="引野">引野</option>
                                <option value="岡垣">岡垣</option>
                                <option value="0">不明</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="club" class="control-label">部活動</label>           
                            <select v-model="selected_item" options="items" class="form-control" x-autocompletetype="region">
                                <option value="" selected="selected">-- 部活動 --</option>
                                <option v-for="club in clubs">
                                    {{ club }}
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                clubs : [
                    '吹奏楽','ボート','野球',
                ],
                zip: ''
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newMember = app.member;
                axios.post('/api/v1/members', newMember)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your member");
                    });
            }
        },
        watch : {
            zip: function (q) {
                axios.get('http://zipcloud.ibsnet.co.jp/api/search?zipcode=7830060')
                    .then(function (resp) {
                        console.log(resp);
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });
            }
        },
    }
</script>
