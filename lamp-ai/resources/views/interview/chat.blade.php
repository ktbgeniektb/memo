<h2>AIとの自己分析スタート！</h2>
<div id="chat-area">
<?php
return [
    [
        'pillar' => 'why',
        'text'   => 'これまでで「これは楽しい！」「好きだな」と思った瞬間を教えてください。その理由はなんだと思いますか？',
    ],
    [
        'pillar' => 'experience',
        'text'   => 'そのときは、いつ・どこで・どんなふうに起こった出来事でしたか？できれば詳しく教えてください。',
    ],
    [
        'pillar' => 'pattern',
        'text'   => '他にも似たように「ワクワクした」「楽しい」と感じたことはありますか？いくつかあれば教えてください。',
    ],
    [
        'pillar' => 'metaphor',
        'text'   => 'その“好き”な感じを、色や風景、音楽などで例えるとどんなイメージになりますか？',
    ],
    [
        'pillar' => 'expand',
        'text'   => '似たように「やってみたいな」と思っていることは他にもありますか？過去でも、今でもOKです。',
    ],
    [
        'pillar' => 'value',
        'text'   => '日常の中で「なんかいいな〜」と感じる瞬間ってありますか？人や出来事、雰囲気など何でも構いません。',
    ],
    [
        'pillar' => 'action',
        'text'   => '今の“好き”をもっと深めるために、やってみたいことってありますか？小さなことでもOKです。',
    ],
];
?>
</div>
<button id="next-question">次へ</button>

<script>
    const questions = @json($questions);
    let current = 0;

    document.getElementById('next-question').addEventListener('click', () => {
        if (current < questions.length) {
            const q = questions[current].text;
            const area = document.getElementById('chat-area');
            const p = document.createElement('p');
            p.textContent = `Q${current + 1}: ${q}`;
            area.appendChild(p);
            current++;
        } else {
            alert("これで質問は終了です！");
        }
    });
</script>
