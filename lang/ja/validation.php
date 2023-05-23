<?php

declare(strict_types=1);

return [
    'accepted'             => ':attributeを承認してください。',
    'accepted_if'          => ':otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url'           => ':attributeは、有効なURLではありません。',
    'after'                => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash'           => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフンと下線(\'-\',\'_\')が使用できます。',
    'alpha_num'            => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array'                => ':attributeには、配列を指定してください。',
    'ascii'                => ':attributeには、英数字と記号のみ使用可能です。',
    'before'               => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal'      => ':attributeには、:date以前の日付を指定してください。',
    'between'              => [
        'array'   => ':attributeの項目は、:min個から:max個にしてください。',
        'file'    => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':attributeには、:minから、:maxまでの数字を指定してください。',
        'string'  => ':attributeは、:min文字から:max文字にしてください。',
    ],
    'boolean'              => ':attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed'            => ':attributeと:attribute確認が一致しません。',
    'current_password'     => 'パスワードが正しくありません。',
    'date'                 => ':attributeは、正しい日付ではありません。',
    'date_equals'          => ':attributeは:dateと同じ日付を入力してください。',
    'date_format'          => ':attributeの形式が\':format\'と一致しません。',
    'decimal'              => ':attributeは、小数点以下が:decimalである必要があります。',
    'declined'             => ':attributeを拒否する必要があります。',
    'declined_if'          => ':otherが:valueの場合、:attributeを拒否する必要があります。',
    'different'            => ':attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':attributeは、:digits桁にしてください。',
    'digits_between'       => ':attributeは、:min桁から:max桁にしてください。',
    'dimensions'           => ':attributeの画像サイズが無効です',
    'distinct'             => ':attributeの値が重複しています。',
    'doesnt_end_with'      => ':attributeの終わりは「:values」以外である必要があります。',
    'doesnt_start_with'    => ':attributeの始まりは「:values」以外である必要があります。',
    'email'                => ':attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':attributeの終わりは「:values」である必要があります。',
    'enum'                 => '選択した :attributeは 無効です。',
    'exists'               => '選択された:attributeは、有効ではありません。',
    'file'                 => ':attributeには、ファイル形式を指定してください。',
    'filled'               => ':attributeは必須です。',
    'gt'                   => [
        'array'   => ':attributeの項目数は、:value個より多い必要があります。',
        'file'    => ':attributeは、:value KBより大きい必要があります。',
        'numeric' => ':attributeは、:valueより大きい必要があります。',
        'string'  => ':attributeは、:value文字を超える必要があります。',
    ],
    'gte'                  => [
        'array'   => ':attributeの項目数は、:value個以上である必要があります。',
        'file'    => ':attributeは、:value KB以上である必要があります。',
        'numeric' => ':attributeは、:value以上である必要があります。',
        'string'  => ':attributeは、:value文字以上である必要があります。',
    ],
    'image'                => ':attributeには、画像を指定してください。',
    'in'                   => '選択された:attributeは、有効ではありません。',
    'in_array'             => ':attributeが:otherに存在しません。',
    'integer'              => ':attributeには、整数を指定してください。',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attributeはIPv4アドレスを指定してください。',
    'ipv6'                 => ':attributeはIPv6アドレスを指定してください。',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください。',
    'lowercase'            => ':attributeは、小文字で入力してください。',
    'lt'                   => [
        'array'   => ':attributeの項目数は、:value個より少ない必要があります。',
        'file'    => ':attributeは、:value KBより小さい必要があります。',
        'numeric' => ':attributeは、:valueより小さい必要があります。',
        'string'  => ':attributeは、:value文字より小さい必要があります。',
    ],
    'lte'                  => [
        'array'   => ':attributeの項目数は、:value個以下である必要があります。',
        'file'    => ':attributeは、:value KB以下である必要があります。',
        'numeric' => ':attributeは、:value以下である必要があります。',
        'string'  => ':attributeは、:value文字以下である必要があります。',
    ],
    'mac_address'          => ':attributeは有効なMACアドレスである必要があります。',
    'max'                  => [
        'array'   => ':attributeの項目数は、:max個以下である必要があります。',
        'file'    => ':attributeは、:max KB以下のファイルである必要があります。',
        'numeric' => ':attributeは、:max以下の数字である必要があります。',
        'string'  => ':attributeの文字数は、:max文字以下である必要があります。',
    ],
    'max_digits'           => ':attributeは、:max桁以下の数字である必要があります。',
    'mimes'                => ':attributeには、以下のファイルタイプを指定してください。:values',
    'mimetypes'            => ':attributeには、以下のファイルタイプを指定してください。:values',
    'min'                  => [
        'array'   => ':attributeの項目数は、:min個以上にしてください。',
        'file'    => ':attributeには、:min KB以上のファイルを指定してください。',
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'string'  => ':attributeの文字数は、:min文字以上である必要があります。',
    ],
    'min_digits'           => ':attributeは、:min桁以上の数字である必要があります。',
    'missing'              => ':attribute を入力する必要はありません。',
    'missing_if'           => ':other が :value の場合、:attribute を入力する必要はありません。',
    'missing_unless'       => ':other が :value でない限り、:attribute をは入力する必要はありません。',
    'missing_with'         => ':values が存在する場合、:attribute をは入力する必要はありません。',
    'missing_with_all'     => ':values が存在する場合、:attribute をは入力する必要はありません。',
    'multiple_of'          => ':attributeは:valueの倍数である必要があります',
    'not_in'               => '選択された:attributeは、有効ではありません。',
    'not_regex'            => ':attributeの形式が正しくありません。',
    'numeric'              => ':attributeには、数字を指定してください。',
    'password'             => [
        'letters'       => ':attributeは文字を1文字以上含める必要があります。',
        'mixed'         => ':attributeは大文字と小文字をそれぞれ1文字以上含める必要があります。',
        'numbers'       => ':attributeは数字を1文字以上含める必要があります。',
        'symbols'       => ':attributeは記号を1文字以上含める必要があります。',
        'uncompromised' => ':attributeは情報漏洩した可能性があります。他の:attributeを選択してください。',
    ],
    'present'              => ':attributeが存在している必要があります。',
    'prohibited'           => ':attributeの入力は禁止されています。',
    'prohibited_if'        => ':otherが:valueの場合は、:attributeの入力が禁止されています。',
    'prohibited_unless'    => ':otherが:valuesでない限り、:attributeの入力は禁止されています。',
    'prohibits'            => ':otherが存在している場合、:attributeの入力は禁止されています。',
    'regex'                => ':attributeには、正しい形式を指定してください。',
    'required'             => ':attributeは必須項目です。',
    'required_array_keys'  => ':attributeには、:valuesのエントリを含める必要があります。',
    'required_if'          => ':otherが:valueの場合、:attributeを指定してください。',
    'required_if_accepted' => ':otherを承認した場合、:attributeは必須項目です。',
    'required_unless'      => ':otherが:values以外の場合、:attributeは必須項目です。',
    'required_with'        => ':valuesが入力されている場合、:attributeは必須項目です。',
    'required_with_all'    => ':valuesが全て指定されている場合、:attributeは必須項目です。',
    'required_without'     => ':valuesが入力されていない場合、:attributeは必須項目です。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same'                 => ':attributeと:otherが一致しません。',
    'size'                 => [
        'array'   => ':attributeの項目数は、:size個にしてください。',
        'file'    => ':attributeには、:size KBのファイルを指定してください。',
        'numeric' => ':attributeには、:sizeを指定してください。',
        'string'  => ':attributeの文字数は、:size文字にしてください。',
    ],
    'starts_with'          => ':attributeは、次のいずれかで始まる必要があります。:values',
    'string'               => ':attributeには、文字列を指定してください。',
    'timezone'             => ':attributeには、有効なタイムゾーンを指定してください。',
    'ulid'                 => ':attributeは、有効なULIDである必要があります。',
    'unique'               => '指定の:attributeは既に使用されています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'uppercase'            => ':attributeは、大文字で入力してください。',
    'url'                  => ':attributeは、有効なURL形式で指定してください。',
    'uuid'                 => ':attributeは、有効なUUIDである必要があります。',
];