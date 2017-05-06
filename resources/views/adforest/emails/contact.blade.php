<!DOCTYPE html>
<html dir="rtl">
<body style="text-align:right; direction:rtl;">
<p>
    <b>
        {{ trans('contact.mail_head', ['name' => $name]) }}
    </b>
</p>
<p>
    {{ trans('contact.email'). ' : '. $email }}
</p>
<p>
    {{ trans('contact.subject'). ' : ' . $subject }}
</p>
<p>
    {!! trans('contact.message'). ' : '. nl2br($user_message) !!}
</p>
</body>
</html>