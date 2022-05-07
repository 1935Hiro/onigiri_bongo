0328
　<br>

## システム概要
***
【 **背景** 】<br> 
店内で飲食する他に電話注文もできるお店<br>
休日は店頭に行列で並んでいるため従業員は常時対応が必要<br>
※予約商品名・取りに行く時間帯・名前等はメモして書き留める<br>
※オンライン化を行い改善したい<br>
  <br>

【 **現在抱えている課題** 】<br>
クレジット決済ない<br>
メニューの実物がない<br>
メモ書きなのでミスをする可能性大<br>
オプションメニューが目に入らない<br>
  <br>

【 **プロジェクトの目的** 】<br>
オンライン注文を導入し、従業員の作業の効率化やお客様の利便性を向上<br>
  <br>

## 画面一覧
***
【 **A** 】<br>
・メイン<br>
・ご利用方法<br>
・問い合わせ<br>
・マップ<br>
・サイトマップ<br>
  <br>

【 **B** 】<br>
・ログイン画面<br>
・登録画面<br>
・マイページ<br>
・クレジット登録<br>
・予約履歴、購入履歴<br>
・お気に入り一覧<br>
・サブスク<br>
・PW再発行<br>
・個人情報、PW変更<br>
  <br>

【 **C** 】<br>
・商品確認<br>
・お支払い方法、予約日時<br>
・購入完了<br>
・お支払いキャンセル<br>
  <br>

## 機能一覧
***
【 **A** 】<br>
・メイン<br>
→ 商品写真・商品名・値段・個数・タグ（検索や絞り込み機能）・新規登録・ログイン・ログアウト<br>
  <br>
  
【 **B** 】<br>
・ログイン画面<br>
→ メールアドレス・PW<br>

・登録画面<br>
→ 名前・メールアドレス・PW・電話番号・クレジット情報<br>
（ 性別・年齢・職業・住所 )<br>

・マイページ<br>
→ ログアウト（01-04〜01-10までのページに遷移）・予約情報<br>

・クレジット登録<br>
→ 種類（vi・ma・jc・アメリカン等）・名前・有効期限・PINコード・番<br>

・予約履歴、購入履歴<br>
　予約履歴 → キャンセル・日時、個数変更（●時間前まで有効）<br>
　購入履歴 → 再購入・領収書発行<br>

・サブスク<br>
→ 支払い情報・解除・特典<br>

・PW再発行<br>
→ メールアドレス再送<br>

・PW入力<br>
→ 新規パスワード確認<br>

・個人情報、PW変更<br>
→ 名前・メールアドレス・PW・電話番号・クレジット情報<br>

・お支払いキャンセル<br>
→ キャンセル<br>
  <br>

・ご利用方法<br>
→ 購入方法・よくある質問<br>
  <br>

【 **C** 】<br>
・商品確認<br>
→ 商品の追加（＋）・商品の削除（-）・商品の変更・オプション追加<br>

・お支払い方法、予約日時<br>
　お支払い方法 → 現金orキャッシュ<br>
　予約日時 → 時間帯・名前・備考<br>

・購入完了<br>
→ メインページに戻る<br>

## テーブル定義書
***
  <br>

|No|Primary Key|Unique Key|カラム名|項目名|項目概要|データ型|長さ（バイト）|NotNullの有無|デフォルト|備考|
|:----|:----:|:----:|:----|:----|:----|:----|:----:|:----:|:----:|:----:|
|00-01|?|?|top|トップページ|商品の購入・検索|日本語文字列|?|?|?|?|
|00-02|?|?|info|トップページ|問い合わせ|日本語文字列|?|?|?|?|
|00-03|?|?|map_history|トップページ| アクセス方法 |日本語文字列|?|?|?|?|
|00-04|?|?| user guide |機能説明|サポートガイド|日本語文字列|?|?|?|?|
|00-0４|?|?| site map |機能説明|サポートガイド|日本語文字列|?|?|?|?|
|01-01|?|?|login|ログイン|個人認証設定|英数字文字列|?|?|?|?|
|01-02|?|?|register |新規登録|個人情報登録|日本語文字列・英数字文字列|?|?|?|?|
|01-03|?|?|my page |個人情報|個人情報照会|日本語文字列・英数字文字列|?|?|?|?|
|01-04|?|?|credit register |クレジット登録|カード情報登録|日本英数字文字列|?|?|?|?|
|01-05|?|?|background |履歴|予約・購入履歴|日本語文字列・時刻・日付|?|?|?|?|
|01-06|?|?|favorite |履歴|お気に入り履歴|日本語文字列|?|?|?|?|
|01-07|?|?|reissue_reissue |再発行|パスワード再発行|英数字文字列|?|?|?|?|
|01-08|?|?|reissue_input |再発行|パスワード入力|英数字文字列|?|?|?|?|
|01-09|?|?|editorial |編集|個人情報変更|日本語文字列・英数字文字列|?|?|?|?|
|01-10|?|?|cancel |キャンセル|購入キャンセル|整数・日付・時刻|?|?|?|?|
|01-11|?|?|subscription register |定期購入|サブスクリプション登録|日本語文字列・英数字文字列|?|?|?|?|
|02-01|?|?|check the basket |商品確認|商品の追加・削除・変更|日本語文字列・英数字文字列・整数|?|?|?|?|
|02-02|?|?|payment reserve |購入方法|支払い選択と予約日時|整数・日付・時刻|?|?|?|?|
|02-03|?|?|completion |購入完了|購入完了後のアナウンス|整数・日付・時刻|?|?|?|?|

## DR図
***

https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&page-id=ODrUTmYE-0aKECBiOCyd&title=DR%E5%9B%B3.drawio#R%3Cmxfile%3E%3Cdiagram%20id%3D%22CFqNED6zt4X_rKP4FSig%22%20name%3D%22Page-1%22%3E7V1bc6O4Ev41PCaFAAnxCL7sqVMzW1ubOrWzj0xMYu9xjA8mk3h%2F%2FZGExEVcHS6C7MxUzYAQ2Ja6v%2B7%2B1C00c%2FXy%2Fkvkn%2Fdfw11w1Ax9966Za80wbIzIv7ThmjQAhM2k5Tk67Hhb1vBw%2BDvgjTpvfT3sgkuhYxyGx%2FhwLjY%2BhqdT8BgX2vwoCt%2BK3Z7CY%2FFTz%2F5zUGp4ePSP5dY%2FDrt4n7Riw87a%2FxUcnvfikwFykisvvujMf8ll7%2B%2FCt1yTudHMVRSGcXL08r4KjnTwxLgk921rrqZfLApOcZcbft1ej9cvD7%2F%2F%2BPWXx29%2F%2FfsrOMcPd6b4cvFV%2FOJgRwaAn4ZRvA%2Bfw5N%2F3GStXhS%2BnnYBfaxOzrI%2BX8LwTBoBafwriOMrn03%2FNQ5J0z5%2BOfKrwfsh%2FpY7%2FpM%2B6h7ys%2FU7fzI7uYqTUxxdv%2BVPkrtsKM6z%2B9iZuPESR%2BF%2Fg1V4DCP2A83tFut6dkVMK5kQLxkMOgK1g8ybLuFr9Bg0jKwQVj96DuKGfjAVBaJDQfgSkO9O7ouCox8ffhS%2Fh8%2BF%2BTntx291o8i%2F5jqcw8MpvuSe%2FBttIB24XgKbzztXSySJTkt3YBX6k4PkC4iz3C%2FJmpg43iKaSIVolqTFcXTdceYiLcBSIi5Gcf6NCaYfWkqQqQZljDaUEZCWwdifeRSrhDRFyAQ7ytogolaSJQNKWKLrxUck35%2FflUnZrTIrME3%2BnDqMM82%2B%2FcfXCQC48%2FTDP77yCTC0DdQcT3M22samBy45MDUMxIHJLpEDQ3Mt0eLyA2%2FFL3lY9DHEwVZc8sSBo22Q5iB%2B4JHnwEol%2FeJ%2FJ25gQbH84%2BH5RI4fibgGRNy9H0EUH4if5fILL4fdLtHh4HL42%2F%2FOnkd1gU80eTj0NLhOdYE%2BIHgvSCF3AvnNmeuV15IGsCnLOn%2B8fm8Kt5XP9h1Hp48qw7XyhvDp6RLEkhwNIjlIiTHN0PQeFvB02S6bEhtsCl3jogNb4EnqfidHB1J%2F5OhN%2FcfCM%2BMnno2BZ4m6N%2BCZgU2nON9gYYBmqwC0EjARVNK32z6O4ywQrUZcerp6ptXi6iXfq7%2BrB4qfYzdDXXP3kZCuhHOagY5kSrynkH23TI7R%2F14pJZQCyh2HGpd%2BxmkfRIc460SOnvn%2FQz4tAVOMxYEpcNYWH0RGIfms4ueXmiUdLWrg2%2F4QBw9nn8nwW%2BSfi9r2HPm7A5F5oW%2Bn8ES1%2BOlwPBZ8A8dhAXotjJY0pxYYJYEVp28Z85eGwvsc62dJcp1XjQLw3So2ZfPYb0SloVutNpChVxHXdsGT%2F3qMhxlSiCq5g%2FyYpuOXH1OExhpUoKt2ho1%2B3rDH%2Fo5tO6yOtqNm%2Bsf1hpHEIty1uMN2Y%2FdxMN%2BqxfzL2T9VojTFzrsLkyAK0MC8t6zz%2B%2BhwP4bx6Oik32hO0uZkCIewMhImIuQZDBMHwD5kqjYgZgcLosJvpn9ylkcx0zmI%2B3srhFm65B1PEXEjU63p%2B1BwVHD29DoiaOdf9uxLAjVClHAZ09NCkhSZbbyQ1H8KS2iXaes5W7Df%2FqAclLfVHEEi4RXnoJwtveTqmmcxnkqnQVK%2FkGiZBJPZaPj0e1M3%2BaR%2FlEQYn0OyldjC4cAwJZ9mYUQBVoJ%2FEpkzzTqcXs0TT%2B1FTRMIDpKhUs4pkNdnjXHIQSAbvJaFkJb%2BIyU7LMo%2B8jDOXYswTpdDPSKUE%2FKEteate6RmyM44UB65VflMM8CcaYwO6mh0bBU2x5LYJNyMKM3dxwEUXIEo2aJnoqzrenb%2Fe5TpOtTwli2eYqbZ68%2FhwJrNDuwd8WClBfSeC6Tju7NAx7NAiGm8kq4IYSjJ1pDXGFsgorn7SFTQwnyOJFNDpzjkIopJND3EYdkcDg3QPWNhPocpecCo7HI4U3occFbc4AeiYZqqPTbs2B1hByjJ64dS8GJNASQ2UCE3ihzTrvOvZvrlhJsWMtgyevafog7EXpidyicbkiBZSkjMuds0vWbhJgwarSZs2qjZUpvakZ70tWHSovQTpH%2FHxjbhhLb71Hq1VPSkBLG4RaQ4y2IyECVoSwG5cLNqk0ek%2FnAK2IPO55DkeUgsVLI4YUvuWFsYKPdHfJ1h5MWMhRlYS%2FNcbjw9S8Mp5%2BzR0NBL0oughqHmQraOC9gBooQX6b8sA4ukKrM0kU2ZhYWqkycLuZPgVlyaqJKoa%2BK9UUNDjhwnSHST2VL%2FLfe3QHN%2FoDf2HwvHnDKQVSAC0jBxtj0GH0gkJQINrzOqu0rAF8dww%2BYaoDuiSUCuapw%2Fx73AQgoiWy6rL9PpCguvZfNyEpmkGLnMsmENC4rTnbTYYgRjZSqvn7CXHQ4qyHYUFZntK69KGC5BaKYMVEutl9xf2ulkpMXXCsrqtspVAg2IokPFcmwCKIJnwo4AFFu0GJ%2FMjtmtdsxAlr00O2Ysz44RYQXFJAIz4zm5%2BJpMIhPxXQt602UGDVCGc1kGTaY3gXKDVrEByKzl5ufTPqhvkPqBWLAdHnMgqXZBkX8O2IHF9A3RfRJu5zbGbJ6ZK5oW26jjTQylrmjfHVgch1dZj8ubzLroVKY1JmE16qtI5wlciaMgFjvdtGVpwayhHDHAArPCiWsIxYyjUsZpuijuZlLB%2B9jikjhYXAp5yeQoXwyHSqpUcibH7sfVT2Rz5p1JCuQVoJYcnZb%2BI%2BXoqF2s1nuJ2TSJY53FrC%2Bv1s%2FmLC0rGNI92zBiB4wI29h0yzfOObiUhZjQjJT2klitGH87gHmRUvvU702ElKR9DhbQTKT1uGtA46gwLvImuZMYC6CrDYX7r8pMkkIwb8mB0gZMpbcPtPQ3W%2FpbNuzXf5Jd%2FSqWo5v3L61MUNI1zDqTIMhxK1VjcYs2XMdrrZl%2Br%2Bu4uGjDQWHGazZ4Yb5RVe6LtNttljpXzqpDNDzndzk0SF92PK6e0MGzyka4%2FcUp0xR2Aqej4esdj%2FeLlCqyzRaGBpCaJLq1UaL7aGEKLu%2FZYELVCi4%2BbMEyUdwawDUzNraweTpj9pclLrI9SBf31RH8%2BjwqJ6cJaAyzI66r2UiqhCZmofaivX%2FL%2B2LkXJJb%2B7e9o0t%2BgcMkmW6gonjkZwCU0%2B2mtDVd7NcxUNbatfKG8eIhY2G5SFT2tnQDGyp7Lk2iqd7txmG52A4Nelyruk913o2Upml0Xefs8sXUkdgbtN2uVuOQ2LijCU5xZvhttpS8R2RhLLbROS2n707KPf0pXfFk9tzYfyJHbLLZ%2FJAjJhdnt%2FhJzd3HcXvECC7F8s35aVmmK6KEpDeA8Zv9r3UZu0rcYa%2BqxOMT%2FVqb%2FsK06AWzRXlvI4oFAHV7PvXvv6X670M%2FexYeIvUPR%2FIQ1TuIcGmrPh0WcnpXDsyNysPWPewmKOMt7ijxPedQMmp33SF%2BnI3EZcgA8ovDhnrLoJzxMEkp6QLr3U1a6ydVBbpeygH%2B5%2FcvFVWstRRK4%2Btbh7aCi6Qacc1uXGmqBUTYKqqI1otonODNHAsrfZjz024u3RW0PPFJnQ964wvxI0x5jUV5Ui3NsikJvgxSpx2xNOEbBaSjf7kcHosDUxzFMSjD8oDmBgxWjJdo62nqJUsPxeu6xRMSV6Vk6csbDbY8p8ZjGArdxEpdYX8ISH12Z51bPEvXzBCNorFQYFpFL0kE0YC4yS%2BseHEub%2Bpu2aq0sShpAyikI%2Fv1ZX3EFeJljqWOTpeXcPRVx94bJc5EHZE8DR9Ux9JzxlbHCjZ3sO1aECtLWbOwfK05%2FxzdRaAckU%2Bru1WlTMPq7tDBtipFlt95BZ2UT7lVl8s2uvSosdW5vPsSfaGjQ1OfaTTpMAa%2B%2FK6DT6OIpSlQbkWrKNShNbH3yulclA%2BZA6le6UFjK145I7oyF8yiFA4NMVmKDV7%2FczQRVaScTqqJQB%2FfoR2gSmAuDi0aJr4sPWdkRQR6lUeLaICZkqe4zL58GrWTAbWiLmAgrSOnUUjptmz6yG%2Fafw13lELe%2FB8%3D%3C%2Fdiagram%3E%3Cdiagram%20id%3D%22ODrUTmYE-0aKECBiOCyd%22%20name%3D%22Page-2%22%3E7V1ZW6M8FP41XNaHfbksXdTRGesyMzo386BFW6WlUhyXX%2F%2BFkNACJ6W1QGo%2F5mKekgakOe9ZcrYISmfydhg4s9F3f%2Bh6giwO3wSlK8iyYero%2F2jgPR7QJDUeeAjGw3hIWgxcjj9cMiiS0Zfx0J2nJoa%2B74XjWXrwzp9O3bswNeYEgf%2Bannbve%2Bm%2FOnMe3NzA5Z3j5Ud%2Fj4fhKB41ZWMxfuSOH0b0L0u6FX8zcehk8kvmI2fovy4NKT1B6QS%2BH8afJm8d14vWjq5LfF%2Bf8W3yYoE7Dde5YW6PHg1bnT9NRPe8%2F9ub%2FgmMlkzeLXynP9gdot9PLv0gHPkP%2FtTxeotRO%2FBfpkM3eqqIrhZzTn1%2FhgYlNPjohuE7IabzEvpoaBROPPIteuHg%2FRpdtMQDUZLpyE30xANJo9fdN%2FIn4qv35auBG4wnbugGZHAeBv6T2%2FE9P8A%2FQxHxv%2BQbSrvojw2d%2BQi%2FfvQu8e%2BPfjRzWcnQ3H8J7sis8eGlfXXhW%2B70tzI2Xj5OHg97LZlAPXSCB5fc69nyc%2Fv0r3hzdzHXp0e6YT2oLSmhPuIa10e%2FI3hH9wWu54Tjf%2BkXcQh%2BH5J55NZ2EDjvSxNm%2FngazpeePIgG0ATCiQkOKSPKabRsNB19iP8%2BvVr6IYshDMANwKiKPNAIQMeyGNCpGC3PH7ffDg%2Flp7sjbTBTnr1bo3XPBy2mmSa%2FpIk10J%2BrMBIPtJQkKhBDoMTp93nABpyobIubJVpvTkpZix%2F8z%2FFeyJ8SerJgGYLZB6l86twiwyFFGccbP0zR5zu0SJGgt%2F%2B5QThGqrlNvpiMh8MYBO58%2FOHc4udFtCHoRg%2FXbEHrJhSIHuC%2BQXYDuXmhrZdpwwZrfnnJ05Fmkw1qJGzGqgtepFP8%2B%2Fs5onWWJmVwnAQSozaWS6t%2B0VJL0f39vsnS%2FRVz4qj9dzw5uTzxjt50e3J1OPAujluSyUOCa2JGgpsZ87BgvmLoNUh8vvbn9iKfl6Vg%2FXy%2BnurXj8c%2Fp%2BbTU38yd7thS%2BGBM0XP4Ewp11JYuSQp9aIIpiK0JfxBFtoqGbEV8sFq05EOmWObOfjNX8cTz5m6OXIP3XvnxUPLb9%2BPPW8JBLpuy1jvPwTOcIyoS7%2Bb%2BvgxTNWTwwJTm6jpJaaXr4sNqUSpMFrejBri9uodXn8DWH9DsDXB6pG1NdFqm4Ldo6stCXZe86MlCXMrTdZteZnJELUIPPc%2BXGUPzGfO3Xj6cIqnddXFyAVZnGjIR7ffe3hHPkI3utOc4WCj5etEMgKZEHIHXUuLa2xVzJDw6fhT9PrOGFPSdebhqzsPsZQKnXDJJlkLBivAngcHQYO8JhqUysBgAmDQBKRvTFvo6YKlCWgl0QhiSdPCI7Zg5439Bgzbg0HjDgYLlswSFgh6hAS0CYhH2jbGCQKGthAaDSrKR4XJGxX0wSlUWIJpCJYUfUBa2%2Bw2pK%2BA9JLEm%2FbUxgdsNSttoiGjrZsdsfM%2BwQYWJcBiXRuyDFiAWz89R1eOngdJLi%2FqUL0PUKGBsJ3cEGYjB4qy2vGQnU9Df5U6HmQFEErEPzkAkfnlHJQMAbBwUIpaat1b5A%2FurrdSsbjKDDBa%2BYUclpDYgB2WXMRGxslB%2FUpMsZGdr6ilio2VS5jZ6qIdrqnjD3hfQ2wZm5ow%2Ba3uV%2FAyKes6FhJbovxtA2Q65pe78SyUYTGyAoa74mZSIJWdB4MZ%2BRntLvYstIV2s32oAgzc3UxE2BdLBiQWIseTJVhWJCUaMJQPBv7eJSjZINbBNORDfI5IGRvU%2BWAsuRoaoVEDTvi7ohRG2HB9oOxXIFFb28STKiMJFEnEi2ua9EOy7pmQbuMd%2FDSn7nhIUWGEFDXMlnFssRtFnJG9b9F9VhM8qgQM%2FG09ZkgxEgjIrEMyuk92gZGwblBRAyrqNPrYSfSQ3rCo3iAOGKzTv4R2ljNJ1%2BvGaMyq1hhyv%2Bh4b4WErxoZzFYHj%2BiCjd0vSDFbWsNvBSjYpCiEg0YGX4%2FtfOnT%2FA4Vj4jUcJMXX1l2g4lSJYPFO3qbl6i8IzGitqMhXHZkNh2KGQx%2BTP9d%2Fe2qo7%2Fi9bc%2Frn8yvOMTwVWNNNqoImKFYrLzNSmDrwoCuFJ%2B5%2Fe1Msc5oaySgN9WokRS%2BFIyLUYKE0GA4G2Vlabr0vX615Vn%2FFXdwcep9SIfz6Y%2Fnp%2F5BHJz0qOg8CQnPdLzKyo84Qy6A0W3NhEg6%2BqukutR1kXfDhWuSkYafbUUrkLRKJJN9AcE2pfLJlIZlgh5fFS3T1s97GI%2B0SogA4mp3YV%2FOV9N9CV9CbJYozMBXG2IR5ZLtpJwirJInWknwQCaKtxOQi75ZLBmT5lGyCY5oRz8DODrMUK5Ci4UoIQnUOhncWM2mChZatTp%2FAf1Tj6wWq%2BdJu%2FYPo%2FtJdjZSnQ9U1kuG6s3BAXzqzHhwOyy%2FUoIZxB%2FkRCu7JDBtgrn2XgErirsmUJbxy5nI8r1sm1cYNYRbLkGg40%2Bsb902%2BJhJQhmLVNlv25oKDH7thHMIC0YCXhxYD7Ou%2Bs22riA6Jv4fDlYaODrMS20xo7nYrNlRUOdsSEQIMzeHI0JzwEOEneBAWX4WbhSw8ZaGylrCWttDadh4pCynQ8wNjDYCgZ17uTY7mBQLNCWMYmTjVOCbeVWnL5GiZVqAkTRyyixYoeIthDWPVxxQZIxESfjrj9RO4fO1yDYJpELulPKOknqzNMCiSjniDj4nc3BMZOESIu2X2kvZe7EIyYdaUz3IuBsEnDlYLqDr5ffs0U4aconqyd9ndr3xg8HJ7ePl88%2Fv7mz57Oz6%2FbdGSvW9em2TPsizDNmkrIuobSqCAX5VZrOelvzLJspdkJcf7yL1uOfmzvl9q3burClmXZ4AdpmWrRZihhTj6LUtbQW4MOYSckZh2R4kBp5IwvnwLdxvrMRkSLOgC6gT8OYaWiwkb8TjDnv2cePT%2BoQrbjh9M%2BHN8d6B2RMM0oNiSRyojobKFQPhTrtqsG59%2F37zdWl9HF0NvnjmAP3WmHtn5da2bVp%2BeqiapUWJrXzdRH7Kr7X9j%2BVYViBlILkd55pt6Fdw8%2BZ6BaTYXZCtL%2F%2Bejl%2FO3r7uFGD8Pb3QPqpBn1wn5TX8nrk6zJjPzYuiGs20ZuC4xMyJQltcYh0qSPp%2Bzx8Pv94OD2Z%2FdBc37W%2BsYW%2FrVEvqp72osoLL%2BqaLSf%2BLwoCMvAVtSIDH6QmpCA2ag5i4b24GckAtEdH%2B%2FVGBqyGDZupNlEQIEoq43mGI61Uno9CKAY2Ppq%2BVfUJIECdVAYtuMYCSK3JEj6d2%2Fo6GofuJSJR9O1r4MyEFUfbVVuO8Bl9nm1HpAMKXQYooFdGAfa5MvmSkEQ96DQcmg9Sf5JPixNI%2F0%2BcmsOJoa2Hk8pSWqD2RHrUlagdtycyo71kI7NLTWCps%2BMMSHSoDZER9SCycPchpO3teGvYwZtFPVLyDQxKhoFcZxNBuF6db%2B%2BLTL36jpWr2%2BPBx4Xz43kcioYddK6%2BTVr%2F6Da58LgCxpGaFfcdzwCMVp%2BwqlOy82XSfbSs6pRVK%2FglDcPV%2FJ2kwCW6vUYbEFxrhhtgo4w4GgCK3ACl%2BYn32CjcECNmjfYfrAPy%2FMfnpPKSqwvZ3WHS4vvx15t5dn7b8p8nXVvRXsJfgcXptJlsSq1VIL4z8406%2BkOA5xjsV3FhzBHsnFnxQDLS583sUnuIVbgvDgUZJMpPYkKxRoiPvlSxjtAjvWBpS%2Bm2hT0Tv0RTiXqPCAGJtHa8Lk2kZlO2GgebtAnjkIoBvh6UOQklaMU1qg0CSkdAnR4a8PWg0lQtYnfE9D0Tdw3PB1Qbwm9N%2BFpPdoAd97BHlql%2F40T3XiQX2ib%2BgA%2BhbWK2VcCj1nxN0DjNB1D3eLtGWKHQ3abBRKt2v6YpaRNSVVPus8L5sl6uuw0%2BHRQKA%2B7Zfo3hbF3081N14ujeiR0a%2FCN4d4cSRSXtjpekZKCqLtQleOnXlhubJOhUKzcMdTO5kZ2v6Vb1cgM8iIzIjT0RG4VNpCS09jskN1ZCHUj1SzK1ljoPZI6hireT%2B99jSoHScUDvjlHVhk6CY%2B6NyV6Cyc7gZA42O%2Fh%2B9AUAHqUlGKmoW9M%2FpgZUcPfxyZBTPk65sUjANfaqo5EoLQfnz9LEzgYMpYKBu7tPhsJqSQ9CIyqRbzftxKogfa0OP5j2%2BcDP4PgHtdkUQEM0OCjTONTW7SdfBgLAdAOA%2BbMk%2FqI5UdkUBcgWqyolip3ZsUa9OzLK0W6IBN30sjjuf5v3lMWBUmPa08PT5Zn7y%2FUuJ6dHg5b52rq3%2BmBGRG4nXFwKW8%2FeGOe6Rv%2FKIYaR6Upu1NqCGSTHSvOnacG8HtXZQN%2BJvTFYpM7YBGXykHaED0v1UVmZcNDaPqoyqoZBWkBM2DQMqIBR2Zywu4y6VpP8Bgo1QIH7QTb5FM89Oa%2B0hHgkfAA9WbHleORGJ9VXG5CUMkUJasGpNgXzK0pkWHEw4Z4kMjCyWBYBSVlRdulgGzisykU61FwbuKr%2F%2BDKTs6uytuDxrWR38mv454%2BVerzrqq6jyxTZRN%2FWQxFl%2F09cLdgJiQe6rqfPut2youYdvKE6oSfnHbZ7zlXb2ij5046z2ZTZTIyYi8ldFZAQOttlv%2BwLmaF5EjaUzV23LtR88GsvGG1lE6XCbYPMZdtgZZz6kigXFKxuOV%2BuIV9a4dsSI7n4dEsMs1xgrjqBoXg7yyUvP4sb3VqdX5udn8nHrQZnKhecVS%2FIVjUX3dFDfY2M5VHUNiU7XynZ%2FQGGcRi9GpujKjkFtHMx1Do7%2BIIIgbaRzVmVvPBg1hmwAfEAFXA0Z1XWDYM6gzUgDKD6v6a%2FY7VErzOdGCQ65Mto%2BjvWDAOrwsxidBn4frhsYwbObPTdH0Yuqd5%2F%3C%2Fdiagram%3E%3C%2Fmxfile%3E
