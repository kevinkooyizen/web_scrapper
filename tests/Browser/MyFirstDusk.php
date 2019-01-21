<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;

class MyFirstDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            /*$browser->visit('http://hub.beaconsbay.com')
                    ->type('email', 'support@beaconsbay.com')
                    ->type('password', 123)
                    ->press('#form-login > button');
            // $report = $browser->driver->findElement(WebDriverBy::xpath('/html/body/div[2]/div/div[2]/ul/li[8]/a/span'));
            $browser->driver->findElement( WebDriverBy::xpath("/html/body/div[2]/div/div[2]/ul/li[3]/a/span") )
                ->click();
            $browser->pause(500);
            $browser->driver->findElement( WebDriverBy::xpath("/html/body/div[2]/div/div[2]/ul/li[3]/ul/li[3]/a") )
                ->click();
            $browser->press('#list-card-btn');
            $browser->press('#form1 > div > div.col-lg-7 > div > div.form-group.form-group-default.form-group-default-select2.required > span > span.selection > span');
            $browser->pause(500);
            $titleInput = $browser->driver->findElement(WebDriverBy::xpath('/html/body/span/span/span[1]/input'));
            $action = $browser->driver->action();
            $action->moveToElement($titleInput)->sendKeys($titleInput, 'test')->perform();
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="select2-select2-results"]') )
                ->click();
            // $titleInput = $browser->driver->findElement(WebDriverBy::xpath('//*[@id="address_1"]'));
            // $action = $browser->driver->action();
            // $action->moveToElement($titleInput)->sendKeys($titleInput, 'Address Line 1')->perform();
            $browser->type('#address_1', 'test');
            $browser->type('#form1 > div > div.col-lg-7 > div > div:nth-child(3) > div > input', 'Address Line 2');
            $browser->type('#form1 > div > div.col-lg-7 > div > div:nth-child(4) > div > input', 'Address Line 3');
            $browser->type('#form1 > div > div.col-lg-7 > div > div:nth-child(5) > div > input', 'Address Line 4');
            $browser->type('#address_1', 'Address Line 1');
            $browser->type('#customer_tel_office', '01234567890');
            $browser->type('#customer_tel_fax', '01234567890');
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="form1"]/div/div[1]/div/div[7]/div[1]/div/span/span[1]/span') )
                ->click();
            $titleInput = $browser->driver->findElement(WebDriverBy::xpath('/html/body/span/span/span[1]/input'));
            $action = $browser->driver->action();
            $action->moveToElement($titleInput)->sendKeys($titleInput, 'test')->perform();
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="select2-customer_contact_id_select2-results"]/li') )
                ->click();
            $browser->type('#remarks', 'These are special notes');
            $browser->click('#form1 > div > div.col-lg-4 > div > div:nth-child(2) > div > input');
            $browser->driver->findElement( WebDriverBy::xpath('/html/body/div[11]/div[1]/table/tbody/tr[1]/td[3]') )
                ->click();
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="form1"]/div/div[3]/div/div[3]/div/select') )
                ->click();
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="form1"]/div/div[3]/div/div[3]/div/select/option[3]') )
                ->click();
            $browser->click('#payment_terms');
            $browser->click('#form1 > div > div.col-lg-4 > div > div:nth-child(4) > div > span > button:nth-child(4)');
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="form1"]/div/div[3]/div/div[5]/div/select') )
                ->click();
            $browser->driver->findElement( WebDriverBy::xpath('//*[@id="form1"]/div/div[3]/div/div[5]/div/select/option[2]') )
                ->click();
            $browser->type('#form1 > div > div.col-lg-4 > div > div:nth-child(6) > div > input', 'CUSTPO#123');
            $browser->type('#form1 > div > div.col-lg-4 > div > div:nth-child(7) > div > input', 'EXMP#123');
            $browser->click('#k2-import-button > button');
            $browser->type('#k2-import-input-field > div > input', 'K2#321');
            $browser->click('#save');
            // $browser->visit('http://hub.beaconsbay.com/reports/balance-sheet');
            // $browser->visit('http://hub.beaconsbay.com/reports/income-statement');
            // $browser->visit('http://hub.beaconsbay.com/reports/general-ledger');
            $browser->pause(2000);*/
        });
    }
}
