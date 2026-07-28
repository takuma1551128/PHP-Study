<?php
class Gun {

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;

    private $extendedMagazine = 0;
    // ↑フィールド============================

    // コンストラクタ
        // 問題1
      function __construct($name, $maxMagazine) {
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = 0;
    }
     

    // 現在の状態を表示
    function echoStatus() {
        echo "======現在の状態======". "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================". "\n";
    }

    // リロード
    function reload() {
    if ($this->currentMagazine == $this->maxMagazine) {
        echo "リロードの必要はありません\n";
    } else {
        $this->currentMagazine = $this->maxMagazine;
    }
}

    // 発砲
    function fire() {
    if ($this->currentMagazine == 0) {
        echo "リロードしてください\n";
        return;
    }
    $this->currentMagazine--;

     echo $this->name . "を発砲しました。残弾: " . $this->currentMagazine . " 発\n";

       if ($this->currentMagazine == 0) {
        echo "リロードしてください\n";
    }
}
    // 拡張マガジンを装着
   function setExtendedMagazine($bullet) {

    if (!is_int($bullet) || $bullet <= 0) {
        echo "引数が不正です\n";
        return;
    }

    $this->extendedMagazine = $bullet;
    $this->maxMagazine += $bullet;
}

    // 拡張マガジンを取外し
    function unsetExtendedMagazine() {

        if ($this->extendedMagazine == 0) {
            echo "拡張マガジンは装着されていません\n";
            return;
        }

        $this->maxMagazine -= $this->extendedMagazine;
        $this->extendedMagazine = 0;

        if ($this->currentMagazine > $this->maxMagazine) {
            $this->reload();
        }
}
}