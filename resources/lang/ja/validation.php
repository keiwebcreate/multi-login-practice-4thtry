<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    | バリデーション言語行
    |
    | 以下の言語行はバリデータクラスが使用するデフォルトのエラーメッセージです。
    | サイズルールのようないくつかのルールは複数のバージョンを持っています。
    | 必要に応じて、これらのメッセージを自由に調整してください。
    |
    */

    'accepted' => ':attribute を承認してください。',
    'accepted_if' => ':other が :value の場合、:attribute を承認してください。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute には、:date 以降の日付を指定してください。',
    'after_or_equal' => ':attribute には、:date 以降または同じ日付を指定してください。',
    'alpha' => ':attribute には、文字のみを使用してください。',
    'alpha_dash' => ':attribute には、文字、数字、ダッシュ（-）、アンダースコア（_）のみを使用してください。',
    'alpha_num' => ':attribute には、文字と数字のみを使用してください。',
    'array' => ':attribute には、配列を指定してください。',
    'before' => ':attribute には、:date 以前の日付を指定してください。',
    'before_or_equal' => ':attribute には、:date 以前または同じ日付を指定してください。',
    'between' => [
        'numeric' => ':attribute には、:min から :max までの数値を指定してください。',
        'file' => ':attribute には、:min KBから :max KBまでのファイルを指定してください。',
        'string' => ':attribute には、:min 文字から :max 文字の間で指定してください。',
        'array' => ':attribute の項目数は、:min 個から :max 個の間で指定してください。',
    ],
    'boolean' => ':attribute には、真（true）または偽（false）を指定してください。',
    'confirmed' => ':attribute の確認用に入力された値が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute には、有効な日付を指定してください。',
    'date_equals' => ':attribute には、:date と同じ日付を指定してください。',
    'date_format' => ':attribute の形式は、:format と一致していません。',
    'declined' => ':attribute を拒否してください。',
    'declined_if' => ':other が :value の場合、:attribute を拒否してください。',
    'different' => ':attribute と :other には、異なるものを指定してください。',
    'digits' => ':attribute には、:digits 桁の数字を指定してください。',
    'digits_between' => ':attribute にには、:min 桁から :max 桁の間の数字を指定してください。',
    'dimensions' => ':attribute の画像サイズが無効です。',
    'distinct' => ':attribute に重複した値が存在します。',
    'email' => ':attribute には、有効なメールアドレスを指定してください。',
    'ends_with' => ':attribute は、次のいずれかで終わる必要があります。 :values',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute には、ファイルを指定してください。',
    'filled' => ':attribute には、値を入力してください。',
    'gt' => [
        'numeric' => ':attribute には、:value より大きい数値を指定してください。',
        'file' => ':attribute には、:value KBより大きいファイルを指定してください。',
        'string' => ':attribute には、:value 文字より多い文字数を指定してください。',
        'array' => ':attribute の項目数は、:value 個より多く指定してください。',
    ],
    'gte' => [
        'numeric' => ':attribute には、:value 以上の数値を指定してください。',
        'file' => ':attribute には、:value KB以上のファイルを指定してください。',
        'string' => ':attribute には、:value 文字以上の文字数を指定してください。',
        'array' => ':attribute の項目数は、:value 個以上指定してください。',
    ],
    'image' => ':attribute には、画像ファイルを指定してください。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute は、:other に存在しません。',
    'integer' => ':attribute には、整数を指定してください。',
    'ip' => ':attribute には、有効なIPアドレスを指定してください。',
    'ipv4' => ':attribute には、有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attribute には、有効なIPv6アドレスを指定してください。',
    'json' => ':attribute には、有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':attribute には、:value より小さい数値を指定してください。',
        'file' => ':attribute には、:value KBより小さいファイルを指定してください。',
        'string' => ':attribute には、:value 文字より少ない文字数を指定してください。',
        'array' => ':attribute の項目数は、:value 個より少なく指定してください。',
    ],
    'lte' => [
        'numeric' => ':attribute には、:value 以下の数値を指定してください。',
        'file' => ':attribute には、:value KB以下のファイルを指定してください。',
        'string' => ':attribute には、:value 文字以下の文字数を指定してください。',
        'array' => ':attribute の項目数は、:value 個以下指定してください。',
    ],
    'mac_address' => ':attribute には、有効なMACアドレスを指定してください。',
    'max' => [
        'numeric' => ':attribute には、:max 以下の数値を指定してください。',
        'file' => ':attribute には、:max KB以下のファイルを指定してください。',
        'string' => ':attribute には、:max 文字以下の文字数を指定してください。',
        'array' => ':attribute の項目数は、:max 個以下指定してください。',
    ],
    'mimes' => ':attribute には、以下のファイルタイプを指定してください。 :values',
    'mimetypes' => ':attribute には、以下のファイルタイプを指定してください。 :values',
    'min' => [
        'numeric' => ':attribute には、:min 以上の数値を指定してください。',
        'file' => ':attribute には、:min KB以上のファイルを指定してください。',
        'string' => ':attribute には、:min 文字以上の文字数を指定してください。',
        'array' => ':attribute の項目数は、:min 個以上指定してください。',
    ],
    'multiple_of' => ':attribute には、:value の倍数を指定してください。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式は無効です。',
    'numeric' => ':attribute には、数値を指定してください。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attribute が存在している必要があります。',
    'prohibited' => ':attribute は入力禁止です。',
    'prohibited_if' => ':other が :value の場合、:attribute は入力禁止です。',
    'prohibited_unless' => ':other が :values にない場合、:attribute は入力禁止です。',
    'prohibits' => ':attribute は :other の入力を禁止しています。',
    'regex' => ':attribute の形式は無効です。',
    'required' => ':attribute は必須項目です。',
    'required_array_keys' => ':attribute には、次の項目が含まれている必要があります。 :values',
    'required_if' => ':other が :value の場合、:attribute は必須項目です。',
    'required_unless' => ':other が :values にない場合、:attribute は必須項目です。',
    'required_with' => ':values が存在する場合、:attribute は必須項目です。',
    'required_with_all' => ':values が存在する場合、:attribute は必須項目です。',
    'required_without' => ':values が存在しない場合、:attribute は必須項目です。',
    'required_without_all' => ':values が誰も存在しない場合、:attribute は必須項目です。',
    'same' => ':attribute と :other は、一致している必要があります。',
    'size' => [
        'numeric' => ':attribute には、:size を指定してください。',
        'file' => ':attribute には、:size KBのファイルを指定してください。',
        'string' => ':attribute には、:size 文字で指定してください。',
        'array' => ':attribute の項目数は、:size 個指定してください。',
    ],
    'starts_with' => ':attribute は、次のいずれかで始まる必要があります。 :values',
    'string' => ':attribute には、文字列を指定してください。',
    'timezone' => ':attribute には、有効なタイムゾーンを指定してください。',
    'unique' => 'この :attribute はすでに使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'url' => ':attribute には、有効なURLを指定してください。',
    'uuid' => ':attribute には、有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => '確認用パスワード',
        'name' => '名前',
        'username' => 'ユーザー名',
    ],

];