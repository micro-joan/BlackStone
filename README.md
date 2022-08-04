
<div align="center"> 

![Untitled Project](https://user-images.githubusercontent.com/55983491/182498046-639e515c-8de0-4804-959b-b53145e79109.gif)

Mi website: https://microjoan.com <br>
Use and installation video: https://youtu.be/qasPlaaYxiU

</div>

<hr>

# BlackStone Project v1.0

BlackStone project or "BlackStone Project" is a tool created in order to automate the work of drafting and submitting a report on audits of
ethical hacking or pentesting.

In this tool we can register in the database the vulnerabilities that we find in the audit, classifying them by internal, external audit
or wifi, in addition, we can put your description and recommendation, as well as the level of severity and effort for its correction. This information will then help us generate
in the report a criticality table as a global summary of the vulnerabilities found.

We can also register a company and, just by adding its web page, the tool will be able to find subdomains, telephone numbers, social networks,
employee emails...

<div align="center"> 


![BlackStone - Logo](https://user-images.githubusercontent.com/55983491/182504746-26c636f4-fe4f-410d-9898-e51f4ae35e6d.png)


</div>

# Install

**Install Docker**

```
/bin/bash -c "$(curl -fsSL https://get.docker.com)"
systemctl enable docker 
systemctl start docker 
```

**Install docker-compose**

```
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```

### Install BlackStone

```
git clone https://github.com/micro-joan/BlackStone
cd BlackStone
docker-compose up -d
```




# Use

First you need to go to profile settings and add Hunter.io and haveibeenpwned.com tokens:

![Untitled Project](https://user-images.githubusercontent.com/55983491/182502047-36e2b125-de44-463f-8c74-9b8b2cab14e4.gif)

After having vulnerabilities in the database, we will go to the audited client and we will register a client along with their web page, once registered we can go
to customer details and we can see the following information:


<div align="center">
  THE USE OF THIS APPLICATION IS FOR PROFESSIONAL USE, THE AUTHOR IS NOT RESPONSIBLE FOR A MISUSE EMPLOYED
</div>
<br>
<ul>
<li>Name of business owner</li>
<li>Social networks of the company owner</li>
<li>Email and telephone number of the owner of the company</li>
<li>Exposed password check on the company owner's deep web</li>
<li>Subdomains of the website as well as information of interest found in google</li>
<li>Emails of company workers</li>
</ul>

![Untitled Project](https://user-images.githubusercontent.com/55983491/182502564-02929088-2584-4cd9-9d1a-52ce6cb69f17.gif)

Once we have the company that we are going to audit registered in the database, we will create a report, adding the date, name of the report and the company to which
will be audited. When we register the report, we will give it edit and then we will select the vulnerabilities that we want to appear
in the report:

![Untitled Project](https://user-images.githubusercontent.com/55983491/182503343-c1990024-83f2-4c4b-b524-08719d775cac.gif)

Finally, we will generate the report by clicking on the "overview report" button, and later we will save the page that is generated as ".mht", then we will open it with Word to be able to work on the generated report:

![Untitled Project](https://user-images.githubusercontent.com/55983491/182504065-2a55fac4-b961-4cd8-8d38-1f02c98123fb.gif)

