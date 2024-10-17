
<div align="center"> 

![Untitled Project](https://user-images.githubusercontent.com/55983491/182498046-639e515c-8de0-4804-959b-b53145e79109.gif)

My website: https://microjoan.com <br>
My blog: https://darkhacking.es/ <br>
Use and installation video: https://youtu.be/qasPlaaYxiU <br>
Buy me a coffee: https://www.buymeacoffee.com/microjoan

</div>
<hr>

# BlackStone Project 2.0 (For Kali Linux)

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

### Install BlackStone

#### Step 1

```
cd /opt
git clone https://github.com/micro-joan/BlackStone
cd BlackStone
chmod +x installer.sh
./installer.sh
```
The application will start automatically but if you log in you will get the 500 error so you must reboot the system and run the installer a second time (this is normal)

#### Step 2

```
(reboot system)
cd /opt/BlackStone
./installer.sh
```

## USE

Once the installation is complete you can use blackstone from the terminal (with root):
```
blackstone
```

Or you can also look for the icon in the system:

<div align="center" width="200" height="150"> 
  
  <!--![launcher](https://github.com/micro-joan/BlackStone/assets/55983491/87611bbf-f87d-4c41-8bc1-1c1f3a28080a)-->
  
  <img src="https://github.com/micro-joan/BlackStone/assets/55983491/87611bbf-f87d-4c41-8bc1-1c1f3a28080a" width="500">
  
</div>

## LOGIN
<h4>User: blackstone</h4>
<h4>Password: blackstone</h4>

## Latest news

<ul>
  <li>Own and automated installer for deployment of BlackStone in Kali Linux.</li>
  <li>Replace Hunter.io results with similar results native to the app.</li>
  <li>Fixed numerous fields sensitive to stored XSS.</li>
  <li>Limitation of access to the BlackStone app only to the computer that runs it (no one on your network that detects your port 80 raised will be able to access this app).</li>
  <li>Insert logo image for each of the clients, instead of automatic logo by favicon (good results were not achieved).</li>
  <li>Automatic subdomain search in the client file, this functionality is native to the BlackStone code itself).</li>
  <li>Fixed various Spanish/English translations.</li>
  <li>System icon integration for BlackStone, the app is added in Kali as a native app with its own launcher.</li>
</ul>

# Use

After having vulnerabilities in the database, we will go to the audited client and we will register a client along with their web page, once registered we can go
to customer details and we can see the following information:


<div align="center">
  THE USE OF THIS APPLICATION IS FOR PROFESSIONAL USE, THE AUTHOR IS NOT RESPONSIBLE FOR A MISUSE EMPLOYED
</div>
<br>
<ul>
<li>Subdomains of the website as well as information of interest found in google</li>
<li>Emails of company workers or SMTP servers</li>
</ul>

![Untitled Project](https://user-images.githubusercontent.com/55983491/182502564-02929088-2584-4cd9-9d1a-52ce6cb69f17.gif)

Once we have the company that we are going to audit registered in the database, we will create a report, adding the date, name of the report and the company to which
will be audited. When we register the report, we will give it edit and then we will select the vulnerabilities that we want to appear
in the report:

![Untitled Project](https://user-images.githubusercontent.com/55983491/182503343-c1990024-83f2-4c4b-b524-08719d775cac.gif)

Finally, we will generate the report by clicking on the "overview report" button, and later we will save the page that is generated as ".mht", then we will open it with Word to be able to work on the generated report:

![Untitled Project](https://user-images.githubusercontent.com/55983491/182504065-2a55fac4-b961-4cd8-8d38-1f02c98123fb.gif)

<h1>Support Blackstone</h1>
<a href="https://www.buymeacoffee.com/microjoan" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>

