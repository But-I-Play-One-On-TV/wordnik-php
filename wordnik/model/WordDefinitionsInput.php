<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
 
/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class WordDefinitionsInput {

  static $swaggerTypes = array(    
    'word' => 'string',
    'limit' => 'string',
    'partOfSpeech' => 'string',
    'includeRelated' => 'string',
    'sourceDictionaries' => 'Array<string>',
    'useCanonical' => 'string',
    'includeTags' => 'string'   
    );


    /**
     * Word to return definitions for
     */
	 public $word;// string


    /**
     * Maximum number of results to return
     */
	 public $limit;// string


    /**
     * CSV list of part-of-speech types
     */
	 public $partOfSpeech;// string


    /**
     * Return related words with definitions
     */
	 public $includeRelated;// string


    /**
     * If 'all' is received, results are returned from all sources. If multiple values are received (e.g. 'century,wiktionary'), results are returned from the first specified dictionary that has definitions. If left blank, results are returned from the first dictionary that has definitions. By default, dictionaries are searched in this order: ahd, wiktionary, webster, century, wordnet
     */
	 public $sourceDictionaries;// Array<string>


    /**
     * If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
     */
	 public $useCanonical;// string


    /**
     * Return a closed set of XML tags in response
     */
	 public $includeTags;// string


}

?>