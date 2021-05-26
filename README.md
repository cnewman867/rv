We’d like to test your development skills with a few tasks. These tasks are intended to give you a flavour of the kind of work we do at Red Volcano. 
# Task 1
Automation
Expected duration: 
10 minutes
Description: 
Write a script that downloads the “alexa top 1m sites”. This is a csv file available publically. Once it’s downloaded, put the domains that rank 40->49 inclusive into a text file.



Notes: We have deliberately not included the url. It will be a direct link to a file on S3. We want you to find it.Think of this as a “how well does this 
person research and find things” task.


**Url is http://s3.amazonaws.com/alexa-static/top-1m.csv.zip
** Solution requires php ZipArchive to be installed e.g. sudo apt install php7.4-zip
**Run alexa.php



# Task 2
Crawling
Expected duration: 
60 minutes
Description: 
Write a script that reads 1 domain at a time from the file you created in the previous step and grabs the visible home page text of that site as seen through a browser.
Notes: 
There are many ways to do this. Try phantomJS. Install with Composer, else maybe try w3m or lynx.

**using lynx
**run filecontents.php

# Task 3
General Questions
Expected duration: 
20 minutes
Description: 
We would like your answers to the questions below, please paste them into an email when you are done with tasks 1-3 as well.
Questions: 
## 1. You have a 5GB text file which contains a list of domain names. Some are duplicated. Describe the quickest method for removing the duplicates. You may use PHP or Linux bash/cli 

**In linux, cat -n {filename} | sort -uk2 | sort -nk1 | cut -f2- > {newfilename}



## 2. A very active website (approx 1m visitors a day) works perfectly for 50% of its users, but the other 50% timeout. Describe a few scenarios that might cause this and how you would investigate. 

**Check the servers are responding (ping)
**Check where traffic is not being routed correctly (traceroute)
**Check the the load balancer/s is/are routing traffic correctly



## 3. Some users visiting (http://ads.explained.com) find css and js files do not load (404). Why might this be? 

**It could be that those users do not have those files cached and they are missing from a CDN.

## 4. You need to write a php script that acts as a human and logs remotely into a website. Describe what technologies/code libraries might be required to achieve this.

**use cURL to send a POST request to the site
-or-
** use PHP's stream_context_create to submit a POST request
-or-
** use a socket connection to the remote server (fsockopen).


Some notes: 
The tasks get increasingly more difficult. We would expect all candidates to easily accomplish tasks 1 & 2. Task 3 may be tricky, Task 4 could prove quite difficult and we don’t expect all candidates to finish it. 
Once you are finished, please let me know so I can access your VM and check the results. Good luck!
