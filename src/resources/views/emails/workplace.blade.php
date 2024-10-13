{{ $employee->fullname }} 様

作業場所が{{ $type }}しました。

作業場所：  {{ $workplace->name }}
郵便番号：  {{ substr($workplace->post_code, 0, 3) . '-' . substr($workplace->post_code, 3) }}
住所：      {{ $workplace->fullAddress }}
実施日：    {{ $implementation_date }}


**********************************************************
※このメールアドレスは送信専用です。
ご返信いただきましてもお返事できませんので、ご了承ください。
**********************************************************