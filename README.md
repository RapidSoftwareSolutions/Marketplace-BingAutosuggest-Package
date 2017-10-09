[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/BingAutosuggest/functions?utm_source=RapidAPIGitHub_BingAutosuggestFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# BingAutosuggest Package
The Autosuggest API lets you send a partial search query term to Bing and get back a list of suggested queries that other users have searched on. In addition to including searches made by others, the list may include suggestions based on user intent.
* Domain: [bing.com](https://www.bing.com)
* Credentials: key

## How to get credentials: 
1. Sign in [portal.azure.com](https://azure.microsoft.com/en-us/services/cognitive-services/autosuggest/).
2. Click create button.
3. Navigate to Keys - tab.

## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## BingAutosuggest.getSuggestions
Return suggestions for requested query.

| Field      | Type       | Description
|------------|------------|----------
| key        | Credentials| Your API key
| countryCode| String     | A 2-character country code of the country where the results come from. For a list of possible values, see Market Codes. [Read more](https://docs.microsoft.com/en-us/rest/api/cognitiveservices/bing-autosuggest-api-v7-reference#market-codes)
| market     | String     | The market where the results come from. Typically, mkt is the country where the user is making the request from. However, it could be a different country if the user is not located in a country where Bing delivers results. [Read more](https://docs.microsoft.com/en-us/rest/api/cognitiveservices/bing-autosuggest-api-v7-reference#market-codes)
| query      | String     | The user's search query string. The query string must not be empty. If empty or not specified, the list of suggestions in the response is empty.
| setLang    | String     | The language to use for user interface strings. Specify the language using the ISO 639-1 2-letter language code. For example, the language code for English is EN. The default is EN (English).

