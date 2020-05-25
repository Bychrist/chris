<div class="form-group ">
    <label style="font-weight:normal;font-size:12px;" id="captcha_label"
           for="captcha">Captcha: {{ config("blogetc.captcha.basic_question", "[error - undefined captcha question]" )}} </label>
    <input type='text' style="border-radius:10px" required class="form-control" name='captcha' id="captcha" placeholder=""
           value="{{old("captcha")}}">
</div>