class Solution:
    def searchInsert(self, nums: list[int], target: int) -> int:
        left = 0
        right = len(nums) - 1
        ans = -1

        while( left <= right):
            mid = left + ( (right - left)//2 )
            if nums[mid] == target:
                ans = mid
                break

            if nums[mid] < target:
                left = mid + 1
                ans = mid + 1
            elif nums[mid] > target:
                right = mid - 1
                ans = mid
        return ans


nums = [2,4,6,8,9,13,15,19,22]
insert = 21

nums = [1,3,5,6]
insert = 0

sol = Solution()

for insert in range(8):
    ret = sol.searchInsert(nums, insert)
    print(f"{insert} should be placed at {ret}")


