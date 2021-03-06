<?php



    function myfunction($value, $key)
    {

        $value = str_replace("'", "", $value);
        echo $value . "->" . $key . "</br>";


    }


    $str = '{
  "name": "DECD Indika Copy and Paste template",
  "category": "outage_closure",
  "approvalLevel": "alert.approve.level-0",
  "type": 86,
  "status": 12,
  "id": "6572",
  "templateId": 1539,
  "leadGroupId": "15",
  "state": "APPROVED",
  "location": {
    "description": "",
    "geometry": [
      {
        "type": "Feature",
        "properties": {
          "id": "e2e7f207-2155-875b-0765-03b10d29885d",
          "icon": "https://assets.alert.sa.gov.au/alert-icons/event/ic_list_outage_closure_public_area.png",
          "backgroundIcon": "https://assets.alert.sa.gov.au/alert-icons/event/ic_list_bg_outage_closure_outage.png",
          "name": "Location copy and paste"
        },
        "geometry": {
          "type": "Point",
          "coordinates": [
            138.72228515625,
            -34.875853349053
          ]
        },
        "crs": {
          "type": "name",
          "properties": {
            "name": "urn:ogc:def:crs:OGC:1.3:CRS84"
          }
        }
      }
    ]
  },
  "timings": {
    "timesToRepublish": 0,
    "startTime": 1460010056,
    "expiryTime": 1460031656
  },
  "mappings": [],
  "sections": [
    {
      "attachments": [],
      "id": 1,
      "name": "Description Behaviour",
      "statements": [
        {
          "id": 9261,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 1,
          "templateId": 1539,
          "content": [
            {
              "template": "The Department for Education and Child Development (DECD) has undertaken a risk assessment which considered existing and forecast {weather} conditions coupled with the current level of {bushfire / flood / severe storm} activity.",
              "variables": []
            }
          ],
          "orderId": 1,
          "visible": true
        },
        {
          "id": 9262,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 1,
          "templateId": 1539,
          "content": [
            {
              "template": "As a result, operations at the following vacation care, rural care services and DECD-operated childcare centres {{1}} within the {{2}} have been suspended.",
              "variables": {
                "1": "dfgdfg",
                "2": "dfgddf"
              },
              "placeholders": {
                "1": "near local area",
                "2": "name of CFS fire ban district"
              }
            }
          ],
          "orderId": 2,
          "visible": true
        }
      ],
      "preferences": [
        {
          "key": "free_text",
          "value": false
        },
        {
          "key": "link_alert",
          "value": false
        },
        {
          "key": "attachments",
          "value": false
        }
      ],
      "templateId": 1539,
      "alertId": "6572"
    },
    {
      "attachments": [],
      "id": 5,
      "name": "Consequences / Impacts",
      "statements": [
        {
          "id": 9266,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 5,
          "templateId": 1539,
          "content": [
            {
              "template": "This suspension applies for {{3}}.",
              "variables": {
                "3": "dfggfd"
              },
              "placeholders": {
                "3": "dates"
              }
            }
          ],
          "orderId": 1,
          "visible": true
        },
        {
          "id": 9267,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 5,
          "templateId": 1539,
          "content": [
            {
              "template": "DECD has not issued a formal ‘site closure’ direction at this stage and will continue to monitor ongoing incidents across the state.",
              "variables": []
            }
          ],
          "orderId": 2,
          "visible": true
        },
        {
          "id": 9268,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 5,
          "templateId": 1539,
          "content": [
            {
              "template": "DECD staff and contractors currently working at all sites affected by this decision are to seriously consider their need to be on site and to continuously monitor local radio broadcasts, the CFS website (www.cfs.sa.gov.au) or AlertSA (www.alertsa.gov.au).",
              "variables": []
            }
          ],
          "orderId": 3,
          "visible": true
        }
      ],
      "preferences": [
        {
          "key": "free_text",
          "value": false
        },
        {
          "key": "link_alert",
          "value": false
        },
        {
          "key": "attachments",
          "value": false
        }
      ],
      "templateId": 1539,
      "alertId": "6572"
    },
    {
      "attachments": [],
      "id": 8,
      "name": "Further Information",
      "statements": [
        {
          "id": 9271,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 8,
          "templateId": 1539,
          "content": [
            {
              "template": "For further information visit www.decd.sa.gov.au,",
              "variables": []
            }
          ],
          "orderId": 1,
          "visible": true
        },
        {
          "id": 9272,
          "type": "SENTENCE",
          "requirement": "MANDATORY",
          "sectionId": 8,
          "templateId": 1539,
          "content": [
            {
              "template": "Please contact the DECD Bushfire and Emergency Management team if you need further information on 1800 000 279.",
              "variables": []
            }
          ],
          "orderId": 2,
          "visible": true
        }
      ],
      "preferences": [
        {
          "key": "free_text",
          "value": true
        },
        {
          "key": "link_alert",
          "value": false
        },
        {
          "key": "attachments",
          "value": false
        }
      ],
      "templateId": 1539,
      "alertId": "6572",
      "freeText": "Further Information FREE TEXT"
    }
  ],
  "sectionsCompleted": {
    "genericSections": [
      1,
      5,
      8
    ],
    "ACM.AMM.EditAlert.Detail": true,
    "ACM.AMM.EditAlert.Template": true,
    "ACM.AMM.EditAlert.Location": true,
    "ACM.AMM.EditAlert.Timing": true,
    "ACM.AMM.EditAlert.Mapping": true
  },
  "_savePromise": [],
  "defaultTimings": {
    "timesToRepublish": 0,
    "defaultExpiryDuration": 21600,
    "defaultPlannedDuration": 0
  },
  "layoutId": 61,
  "createdBy": 126,
  "parentId": 6572,
  "notifiedRipe": true,
  "alertType": "Education Facility",
  "alertStatus": "Outage / Closure",
  "groupName": "RIPE Intelligence",
  "approvedBy": 126,
  "approvedAt": 1460010108,
  "distributions": {
    "_id": "6572",
    "facebook": [],
    "twitter": [],
    "distributeEmailGroups": [
      {
        "sendTo": true,
        "contact": "Luke Distribution",
        "id": 645
      }
    ],
    "pdf": [],
    "approver": [],
    "approvalEmailGroups": [],
    "reminder": {
      "emailReminder": [],
      "emailGroupsReminder": []
    }
  },
  "createdUserId": 126,
  "createdUserName": "Luke DiggerCorbett",
  "createdUserContacts": "luke@ripeintel.info/0488887473"
}';

    $param = json_decode($str, true);


     array_walk_recursive($param, "myfunction");

    //$arr2["done"] = "$value";
    //var_dump(self::$abc);



?>