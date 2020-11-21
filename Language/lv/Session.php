<?php

/**
 * Session language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Dāvis Lasis <davis.lasis@gmail.com>
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => 'Lai datu bāzes sesijas apstrādātājs varētu darboties, iestatījumā `sessionSavePath` ir jānorāda tabulas nosaukums.',
   'invalidSavePath'        => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš "{0}" nav direktorija, neeksistē vai to nevar izveidot.',
   'writeProtectedSavePath' => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš "{0}" PHP procesam nav pieejams ierakstīšanai.',
   'emptySavePath'          => 'Sesija: Iestatījumos nav norādīts saglabāšanas ceļš.',
   'invalidSavePathFormat'  => 'Sesija: nederīgs Redis saglabāšanas ceļa formāts: {0}',
   'invalidSameSiteSetting' => 'Sesija: iestatījumam SameSite jābūt: None, Lax, Strict vai tukšai virknei. Norādīts: {0}',
];
