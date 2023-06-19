<?php

    namespace Alsace7004\Inspire;

    use Illuminate\Support\Facades\Http;

    class Inspire{
        public function justDoIt(){
            $response = Http::get('http://localhost:8003/api/quotes');
            /* $response = [
                [
                    'quote'=>'We cannot solve problems with the kind of thinking we employed when we came up with them',
                    'author'=>'Albert Einstein'
                ],
                [
                    'quote'=>'Learn as if you will live forever, live like you will die tomorrow.',
                    'author'=>'Mahatma Gandhi'
                ],
                [
                    'quote'=>'Stay away from those people who try to disparage your ambitions. Small minds will always do that, but great minds will give you a feeling that you can become great too.',
                    'author'=>'Mark Twain'
                ],
                [
                    'quote'=>'When you give joy to other people, you get more joy in return. You should give a good thought to happiness that you can give out.',
                    'author'=>'Eleanor Roosevelt'
                ],
                [
                    'quote'=>'When you change your thoughts, remember to also change your world.',
                    'author'=>'Norman Vincent Peale'
                ],
                [
                    'quote'=>'It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest.',
                    'author'=>'Walter Anderson'
                ],
                [
                    'quote'=>'Nature has given us all the pieces required to achieve exceptional wellness and health, but has left it to us to put these pieces together.',
                    'author'=>'Diane McLaren'
                ],
            ]; */
            $random_keys=array_rand($response['quotes']);
            return $response['quotes'][$random_keys];
        }
    }
?>