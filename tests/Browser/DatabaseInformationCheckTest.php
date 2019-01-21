<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverKeys;

class DatabaseInformationCheckTest extends DuskTestCase
{
  /**
   * A Dusk test example.
   *
   * @return void
   */
  public function testExample()
  {
    $this->browse(function ($browser) {
      $browser->visit('http://www.google.com');

      $browser->driver->findElement(WebDriverBy::xpath('//*[@id="gb_70"]'))->click();

      $browser->type('#identifierId', config('auth.google_email'));

      // Press enter
      $browser->driver->getKeyboard()->pressKey(WebDriverKeys::ENTER);

      $browser->pause(500);
      
      $titleInput = $browser->driver->findElement(WebDriverBy::xpath('//*[@id="password"]/div[1]/div/div[1]/input'));
      $action = $browser->driver->action();
      $action->moveToElement($titleInput)->sendKeys($titleInput, config('auth.google_password'))->perform();

      // Press enter
      $browser->driver->getKeyboard()->pressKey(WebDriverKeys::ENTER);
      /*$browser->visit('https://admin.shopee.com.my/')
              // ->assertSee('Laravel')
              ;
      $browser->type('#identifierId', config('auth.google_email'));
      $browser->click('#identifierNext');
      $browser->pause(2000);
      $titleInput = $browser->driver->findElement(WebDriverBy::xpath('/html/body/div[1]/div[1]/div[2]/div[2]/div/div/div[2]/div/div[1]/div/form/content/section/div/content/div[1]/div/div[1]/div/div[1]/input'));
      $action = $browser->driver->action();
      $action->moveToElement($titleInput)->sendKeys($titleInput, config('auth.google_password'))->perform();
      $browser->click('#passwordNext');
      $browser->pause(10000);*/

      $browser->pause(10000);
    });
  }
}
