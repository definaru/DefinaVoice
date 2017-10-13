<p align="center">
    <a href="https://defina.ru/" target="_blank">
        <img src="https://defina.ru/img/apple-touch-icon-57x57.png" width="400" alt="Ink.Defina" />
    </a>
</p>


# DefinaVoice

__Script name__

Script for incline full name and sex determination by name for Yii2

## Connectivity

**Settings in the Controller Yii:**

```php
<?php
// Install on your AdminLTE framework
...
use budyaga_cust\users\voicecms\Voice;
use budyaga_cust\users\voicecms\Namevoiceru;
...
    public function actionTest()
    {
        $nc = new Namevoiceru(); // ! Connecting the Library
        $person = Yii::$app->user->identity->name; // Column name in the database [name]
        $gender = $nc->genderDetect($person); // ! automatic sex determination by name
        return $this->render('test', ['nc' => $nc, 'person' => $person, 'gender' => $gender]);
    }
  ...
?>
```
> The controller is ready. Now create a file `test.php`
> how to configure controllers, read the documentation [https://nix-tips.ru/yii2-api-guides/](https://nix-tips.ru/yii2-api-guides/)

## Demo Example Page

```php
<?php
    // *здесь, в случае с женским именем лучше указать предложный падеж, другие падежи склоняют не правильно это предложение
    // Пример: Вы готовы жениться на Ольге ?
    // В случае с родительным падежом выдаёт слово "Ольги"
    // В случае с винительным падежём выдаёт слово "Ольгу"
    // тут по результатам теста и логики, лучше указать родительный падеж
    use yii\helpers\Html;
    use budyaga_cust\users\voicecms\Voice; // Be sure to connect the voice library
    $this->title = 'Тестирование скрипта';
?>
<?=Html::tag('h1', $this->title);?>

<p><?=($gender == Voice::$MAN)? $person.' - мужчина' : $person.' - женщина';?></p>
<p><?='Добавить в друзья '.$nc->q($person , Voice::$VINITELN ).' ?<br/> ';?></p>
<p><?='У '.$nc->q($person , Voice::$RODITLN ).' 4 друга<br/>';?></p>
<p>
<?=($gender == Voice::$MAN)? $person.' написал 4 сообщения' : $person.' написала 4 сообщения';?>
</p>
<p>


// примечание*
<?=($gender == Voice::$MAN) ? 'Вы готовы выйти замуж за '.$nc->q($person , Voice::$RODITLN ).' ?<br/> ' : 
    'Вы готовы жениться на '.$nc->q($person , Voice::$PREDLOGN ).' ?<br/> ';?>
</p>
```

## Declination by case
```php
<php
  Voice::$IMENITLN; // Именительный падеж
  Voice::$RODITLN; // Родительный падеж
  Voice::$DATELN; // Дательный падеж
  Voice::$VINITELN; // Винительный падеж
  Voice::$TVORITELN; // Творительный падеж
  Voice::$PREDLOGN; // Предложный падеж
  // demo
  echo $nc->q($person , Voice::$PREDLOGN);
?>
```
